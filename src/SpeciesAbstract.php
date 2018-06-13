<?php
/**
 * Created by PhpStorm.
 * User: Andrzej
 * Date: 2018-06-13
 * Time: 13:32
 */

namespace OopAnimals;


abstract class SpeciesAbstract
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $sound;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getSound(): string
    {
        return $this->sound;
    }

}