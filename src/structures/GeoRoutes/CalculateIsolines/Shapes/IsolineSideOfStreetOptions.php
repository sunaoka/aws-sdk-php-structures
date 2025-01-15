<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateIsolines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<double> $Position
 * @property 'AnyStreet'|'DividedStreetOnly'|null $UseWith
 */
class IsolineSideOfStreetOptions extends Shape
{
    /**
     * @param array{
     *     Position: list<double>,
     *     UseWith?: 'AnyStreet'|'DividedStreetOnly'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
