<?php
/**
 * Created by PhpStorm.
 * User: Andrzej
 * Date: 2018-06-13
 * Time: 13:41
 */

namespace OopAnimals;


class Cat extends SpeciesAbstract
{
    /**
     * @var string
     */
    protected $name = 'Cat';

    /**
     * @var string
     */
    protected $sound = 'Miau Miau';
}