<?php

namespace Sunaoka\Aws\Structures\GeoPlaces\SearchText\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LocalizedName
 * @property string $Id
 * @property bool $Primary
 */
class FoodType extends Shape
{
    /**
     * @param array{
     *     LocalizedName: string,
     *     Id?: string,
     *     Primary?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
