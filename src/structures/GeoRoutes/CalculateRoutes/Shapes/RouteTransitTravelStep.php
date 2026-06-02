<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 4294967295>|null $Distance
 * @property int<0, 4294967295> $Duration
 * @property int<0, max>|null $GeometryOffset
 * @property string|null $Instruction
 * @property 'Depart' $Type
 */
class RouteTransitTravelStep extends Shape
{
    /**
     * @param array{
     *     Distance?: int<0, 4294967295>|null,
     *     Duration: int<0, 4294967295>,
     *     GeometryOffset?: int<0, max>|null,
     *     Instruction?: string|null,
     *     Type: 'Depart'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
