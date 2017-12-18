<?php

namespace Yoopies\FaqBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class Category
{
    private $title;
    private $subCategories;
    private $articles;

    public function __construct($title)
    {
        $this->title = $title;
        $this->subCategories = new ArrayCollection();
        $this->articles = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function addSubCategory(self $subCategory)
    {
        $this->subCategories->add($subCategory);
    }

    public function addArticle(Article $article)
    {
        $this->articles->add($article);
    }

    /**
     * @return ArrayCollection
     */
    public function getSubCategories()
    {
        return $this->subCategories;
    }

    /**
     * @param ArrayCollection $subCategories
     */
    public function setSubCategories($subCategories)
    {
        $this->subCategories = $subCategories;
    }

    /**
     * @return ArrayCollection
     */
    public function getArticles()
    {
        return $this->articles;
    }

    /**
     * @param ArrayCollection $articles
     */
    public function setArticles($articles)
    {
        $this->articles = $articles;
    }
}
