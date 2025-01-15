<?php

namespace Sunaoka\Aws\Structures\LocationService\CalculateRouteMatrix\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $AvoidFerries
 * @property bool|null $AvoidTolls
 * @property TruckDimensions|null $Dimensions
 * @property TruckWeight|null $Weight
 */
class CalculateRouteTruckModeOptions extends Shape
{
    /**
     * @param array{
     *     AvoidFerries?: bool|null,
     *     AvoidTolls?: bool|null,
     *     Dimensions?: TruckDimensions|null,
     *     Weight?: TruckWeight|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
