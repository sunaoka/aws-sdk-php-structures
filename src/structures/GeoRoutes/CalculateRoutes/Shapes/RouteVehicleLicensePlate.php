<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LastCharacter
 */
class RouteVehicleLicensePlate extends Shape
{
    /**
     * @param array{LastCharacter?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
