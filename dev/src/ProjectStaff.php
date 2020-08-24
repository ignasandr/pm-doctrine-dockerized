<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="projectstaff")
 */

 class ProjectStaff {
    /** 
     * @ORM\Column(type="integer")
     * @ORM\OneToOne(targetEntity="Projects")
     * @ORM\JoinColumn(name="projectid", referencedColumnName="id")
    */

     protected $projectid;

    /** 
     * @ORM\Id
     * @ORM\Column(type="integer") 
     * @ORM\OneToOne(targetEntity="Staff")
     * @ORM\JoinColumn(name="staffid", referencedColumnName="id")
    */
     protected $staffid;

    public function getProjectId() {
        return $this->projectid;
    }

    public function getStaffId() {
        return $this->staffid;
    }

    public function setProjectId($projectid) {
        $this->projectid = $projectid;
    }

    public function setStaffId($staffid) {
        $this->staffid = $staffid;
    }
 }