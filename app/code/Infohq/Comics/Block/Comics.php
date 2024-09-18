<?php
namespace Infohq\Comics\Block;

use Magento\Framework\View\Element\Template;
use Infohq\Comics\Helper\Data;

class Comics extends Template
{
    protected $helper;

    public function __construct(
        Template\Context $context,
        Data $helper,
        array $data = []
    ) {
        $this->helper = $helper;
        parent::__construct($context, $data);
    }

    public function getComics()
    {
        // Número de itens por página
        $pageSize = 18;

        // Página atual (obtendo do parâmetro da URL)
        $currentPage = $this->getRequest()->getParam('p') ? (int)$this->getRequest()->getParam('p') : 1;

        // Todos os quadrinhos
        $allComics = $this->helper->getComics();

        // Calcular o total de páginas
        $totalComics = count($allComics);
        $totalPages = ceil($totalComics / $pageSize);

        // Pegar os quadrinhos da página atual
        $offset = ($currentPage - 1) * $pageSize;
        $comics = array_slice($allComics, $offset, $pageSize);

        // Retornar os quadrinhos e as informações de paginação
        return [
            'items' => $comics,
            'totalPages' => $totalPages,
            'currentPage' => $currentPage
        ];
    }

    public function getComicDetails($comicId)
    {
        return $this->helper->getComicDetails($comicId);
    }
}
