<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Distance
 * @property int $Duration
 * @property int $GeometryOffset
 * @property string $Instruction
 * @property 'Depart'|'Continue'|'Arrive' $Type
 */
class RouteFerryTravelStep extends Shape
{
    /**
     * @param array{
     *     Distance?: int,
     *     Duration: int,
     *     GeometryOffset?: int,
     *     Instruction?: string,
     *     Type: 'Depart'|'Continue'|'Arrive'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
