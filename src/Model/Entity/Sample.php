<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Sample extends Entity
{

    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}