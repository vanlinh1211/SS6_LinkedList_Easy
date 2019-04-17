<?php

//include "Node.php";
class LinkList
{
    private $firstNode;
    private $lastNode;
    private $countNode;

    public function __construct()
    {
        $this->firstNode = null;
        $this->lastNode = null;
        $this->countNode = 0;
    }

    public function addFirst($data){
        $link = new Node($data);
        $link->next = $this->firstNode;
        $this->firstNode = $link;

        if ($this->lastNode == null){
            $this->lastNode = null;
        }
        $this->countNode ++;
    }

    public function addLast($data){
        if ($this->firstNode != null){
            $link = new Node($data);
            $this->lastNode->next = $link;
            $link->next = null;
            $this->lastNode = $link;
            $this->countNode++;
        }else {
            $this->addFirst($data);
        }
    }

    public function totalNodes(){
        return $this->countNode;
    }

    public function readList()
    {
        $listData = [];
        $currentFirst = $this->firstNode;
        $currentLast = $this->lastNode;

        while($currentFirst != NULL && $currentLast != null)
        {
            array_push($listData, $currentFirst->readNote());
            array_push($listData, $currentLast->readNote());
            $currentFirst = $currentFirst->next;
        }
        return $listData;
    }

}
