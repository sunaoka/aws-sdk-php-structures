<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Current'|'Gross'|'Unknown' $Type
 * @property int<0, 4294967295> $Value
 */
class RouteWeightConstraint extends Shape
{
    /**
     * @param array{
     *     Type: 'Current'|'Gross'|'Unknown',
     *     Value: int<0, 4294967295>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
