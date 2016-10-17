<?php
class Google_Service_Analytics_ProfileFilterLinks extends Google_Collection
{
    protected $collection_key = 'items';
    protected $internal_gapi_mappings = [ ];
    protected $itemsType = 'Google_Service_Analytics_ProfileFilterLink';
    protected $itemsDataType = 'array';
    public $itemsPerPage;
    public $kind;
    public $nextLink;
    public $previousLink;
    public $startIndex;
    public $totalResults;
    public $username;

    public function setItems($items)
    {
        $this->items = $items;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function setItemsPerPage($itemsPerPage)
    {
        $this->itemsPerPage = $itemsPerPage;
    }

    public function getItemsPerPage()
    {
        return $this->itemsPerPage;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setNextLink($nextLink)
    {
        $this->nextLink = $nextLink;
    }

    public function getNextLink()
    {
        return $this->nextLink;
    }

    public function setPreviousLink($previousLink)
    {
        $this->previousLink = $previousLink;
    }

    public function getPreviousLink()
    {
        return $this->previousLink;
    }

    public function setStartIndex($startIndex)
    {
        $this->startIndex = $startIndex;
    }

    public function getStartIndex()
    {
        return $this->startIndex;
    }

    public function setTotalResults($totalResults)
    {
        $this->totalResults = $totalResults;
    }

    public function getTotalResults()
    {
        return $this->totalResults;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getUsername()
    {
        return $this->username;
    }
}