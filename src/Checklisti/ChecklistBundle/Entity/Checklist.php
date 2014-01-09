<?php
namespace Checklisti\ChecklistBundle\Entity;

class Checklist
{
  protected $title;
  protected $description;

  public function getTitle()
  {
      return $this->title;
  }
  public function setTitle($title = null)
  {
      $this->title = $title;
  }

  public function getDescription()
  {
      return $this->description;
  }
  public function setDescription($description = null)
  {
      $this->description = $description;
  }
}