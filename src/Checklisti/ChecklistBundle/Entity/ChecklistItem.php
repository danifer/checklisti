<?php

namespace Checklisti\ChecklistBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChecklistItem
 *
 * @ORM\Table(name="checklist_item")
 * @ORM\Entity
 */
class ChecklistItem
{
    /**
    * @var integer
    *
    * @ORM\Column(name="id", type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    private $id;

    /**
    * @var integer
    *
    * @ORM\Column(name="checklist_id", type="integer")
    */
    private $checklistId;

    /**
    *
    * @ORM\ManyToOne(targetEntity="Checklist")
    */
    private $checklist;


    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="display_order", type="integer")
     */
    private $displayOrder;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_complete", type="boolean")
     */
    private $isComplete;


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
     * Set checklistId
     *
     * @param integer $checklistId
     * @return ChecklistItem
     */
    public function setChecklistId($checklistId)
    {
        $this->checklistId = $checklistId;

        return $this;
    }

    /**
     * Get checklistId
     *
     * @return integer 
     */
    public function getChecklistId()
    {
        return $this->checklistId;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return ChecklistItem
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

    /**
     * Set displayOrder
     *
     * @param integer $displayOrder
     * @return ChecklistItem
     */
    public function setDisplayOrder($displayOrder)
    {
        $this->displayOrder = $displayOrder;

        return $this;
    }

    /**
     * Get displayOrder
     *
     * @return integer 
     */
    public function getDisplayOrder()
    {
        return $this->displayOrder;
    }

    /**
     * Set isComplete
     *
     * @param boolean $isComplete
     * @return ChecklistItem
     */
    public function setIsComplete($isComplete)
    {
        $this->isComplete = $isComplete;

        return $this;
    }

    /**
     * Get isComplete
     *
     * @return boolean 
     */
    public function getIsComplete()
    {
        return $this->isComplete;
    }
}
