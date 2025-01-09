<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRouteMatrix\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LastCharacter
 */
class RouteMatrixVehicleLicensePlate extends Shape
{
    /**
     * @param array{LastCharacter?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
