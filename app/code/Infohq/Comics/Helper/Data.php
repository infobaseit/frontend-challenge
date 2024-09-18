<?php
namespace Infohq\Comics\Helper;

use Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper
{
    protected $publicKey = 'ed1071b6f15d6c749ff1216fe4400a6e';
    protected $privateKey = '97e6e0bae037dec89e580960db49b9a07c709642';

    /**
     * Retrieves a list of comics from the Marvel API.
     *
     * @return array List of comics
    */
    public function getComics()
    {
        $timestamp = time();
        $hash = md5($timestamp . $this->privateKey . $this->publicKey);
        $comicsUrl = "https://gateway.marvel.com/v1/public/comics?ts={$timestamp}&apikey={$this->publicKey}&hash={$hash}&limit=100";

        $response = @file_get_contents($comicsUrl);
        if ($response === FALSE) {
            return [];
        }

        $data = json_decode($response, true);
        return isset($data['data']['results']) ? $data['data']['results'] : [];
    }

    /**
     * Retrieves the details of a specific comic by ID from the Marvel API.
     *
     * @param int $comicId The ID of the comic
     * @return array|null Details of the comic or null if not found
    */

    public function getComicDetails($comicId)
    {
        $timestamp = time();
        $hash = md5($timestamp . $this->privateKey . $this->publicKey);
        $comicUrl = "https://gateway.marvel.com/v1/public/comics/{$comicId}?ts={$timestamp}&apikey={$this->publicKey}&hash={$hash}";

        $response = @file_get_contents($comicUrl);
        if ($response === FALSE) {
            return null;
        }

        $data = json_decode($response, true);
        return isset($data['data']['results'][0]) ? $data['data']['results'][0] : null;
    }
}
