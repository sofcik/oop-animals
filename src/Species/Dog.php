<?php
/**
 * Created by PhpStorm.
 * User: Andrzej
 * Date: 2018-06-13
 * Time: 13:39
 */

namespace OopAnimals;


class Dog extends SpeciesAbstract
{
    /**
     * @var string
     */
    protected $name = 'Dog';

    /**
     * @var string
     */
    protected $sound = 'Hau Hau';
}