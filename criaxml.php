<?php

$dom = new DOMDocument();
$arq = "livros.xml";

//criar o doctype - DTD
$imp = new DOMImplementation();
$dtd = $imp->createDocumentType('bookstore', '', 'books.dtd');
// Creates a DOMDocument instance
$dom = $imp->createDocument("", "", $dtd);
$dom->formatOutput = true;

//crio o elemento
$bookstore = $dom->createElement('bookstore');
//posiciono o elemento
$dom->appendChild($bookstore);

$book = $dom->createElement('book');
$bookstore->appendChild($book);

$atr = $dom->createAttribute('id');
$atr->value = '1';
$book->appendChild($atr);

$title = $dom->createElement('title', 'XML book');
$book->appendChild($title);

$dom->save($arq);