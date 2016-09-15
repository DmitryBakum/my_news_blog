<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 06.09.2016
 * Time: 17:16
 */

namespace AppBundle\Entity;


class Note
{
    protected $note;
    protected $dueDate;

    public function getNote()
    {
        return $this->note;
    }
}