<?php
include "Node.php";
include "LinkList.php";

$linkList = new LinkList();

$linkList->addFirst(1);
$linkList->addFirst(2);
$linkList->addLast(3);
$linkList->addLast(4);

print_r($linkList->totalNodes() . "<br>");
var_dump($linkList->readList());