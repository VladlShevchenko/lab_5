<?php

namespace App\Models;

class Plan
{
    private $id;
    private $name;
    private $title;
    private $description;
    private $price;

    public function __construct($id, $name, $title, $description, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function getDescription()
    {
        return $this->description;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function setTitle($title): void
    {
        $this->title = $title;
    }

    public function setDescription($description): void
    {
        $this->description = $description;
    }

    public function setPrice($price): void
    {
        $this->price = $price;
    }



    public function __toString()
    {
        return "План: " . $this->name . "; \nОпис " . $this->description . "; \nЦіна " . $this->price . ";";
    }

}
