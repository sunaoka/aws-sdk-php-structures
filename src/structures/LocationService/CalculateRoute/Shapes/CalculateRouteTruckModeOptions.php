<?php

namespace Sunaoka\Aws\Structures\LocationService\CalculateRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $AvoidFerries
 * @property bool $AvoidTolls
 * @property TruckDimensions $Dimensions
 * @property TruckWeight $Weight
 */
class CalculateRouteTruckModeOptions extends Shape
{
    /**
     * @param array{
     *     AvoidFerries?: bool,
     *     AvoidTolls?: bool,
     *     Dimensions?: TruckDimensions,
     *     Weight?: TruckWeight
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
