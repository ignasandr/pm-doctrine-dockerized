<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="projects")
 */

 class Projects {
    /** @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     **/
     protected $id;

    /** 
     * @ORM\Column(type="string")
     **/
     protected $name;

    public function setName($name) {
        $this->name = $name;
    }

    public function getId() {
        return $this->id;
    }
    public function getName() {
        return $this->name;
    }
 }