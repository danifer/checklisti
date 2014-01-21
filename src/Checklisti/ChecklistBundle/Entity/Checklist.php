<?php
namespace Checklisti\ChecklistBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="checklist")
 */

class Checklist
{
  /**
   * @ORM\Column(type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;

  /**
   * @ORM\Column(type="string", length=255)
   */
  protected $title;

  /**
   * @ORM\Column(type="text")
   */
  protected $description;

  /**
   * Get id
   *
   * @return integer 
   */
  public function getId()
  {
      return $this->id;
  }

  /**
   * Set title
   *
   * @param string $title
   * @return Checklist
   */
  public function setTitle($title)
  {
      $this->title = $title;

      return $this;
  }

  /**
   * Get title
   *
   * @return string 
   */
  public function getTitle()
  {
      return $this->title;
  }

  /**
   * Set description
   *
   * @param string $description
   * @return Checklist
   */
  public function setDescription($description)
  {
      $this->description = $description;

      return $this;
  }

  /**
   * Get description
   *
   * @return string 
   */
  public function getDescription()
  {
      return $this->description;
  }
}
