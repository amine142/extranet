<?php

namespace AppBundle\Entity;

use BladeTester\CalendarBundle\Model\Event as BaseEvent;

class Event extends BaseEvent
{
    protected $id;
    protected $title = '';
    protected $description = '';
    protected $start;
    protected $end;
    protected $category;

    
    public function getId()
    {
        return $this->id;
    }
    
    public function getTitle() 
    {
        parent::getTitle();
    }
    
}
