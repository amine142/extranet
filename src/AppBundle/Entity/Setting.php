<?php

namespace AppBundle\Entity;

use BladeTester\CalendarBundle\Model\Setting as BaseSetting;


class Setting extends BaseSetting
{

    protected $id;

    public function getId() {
        return $this->id;
    }
}
