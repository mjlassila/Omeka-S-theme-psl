<?php
namespace OmekaTheme\Helper;

use Zend\View\Helper\AbstractHelper;

class SearchForm extends AbstractHelper
{
    public function __invoke()
    {
        $view = $this->getView();
        $searchPageId = $view->themeSetting('search_page_id');
        if ($searchPageId) {
            $searchPage = $view->api()->read('search_pages', $searchPageId)->getContent();
            return $view->searchForm($searchPage);
        }
    }
}
