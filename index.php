<?php

use App\Entity\Category;

require __DIR__ . '/bootstrap.php';

$category = new Category();
$category->setName("Minha primeira categoria");

$category2 = new Category();
$category2->setName("Category 2");

$entityManager = getEntityManager();
$entityManager->persist($category);
$entityManager->persist($category2);
$entityManager->flush();

$categories = $entityManager->getRepository(Category::class)->findAll();
foreach($categories as $category){
    echo "Name: {$category->getName()}, Id: {$category->getId()}". "\n";
}