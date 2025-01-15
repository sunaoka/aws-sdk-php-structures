<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRouteMatrix\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LastCharacter
 */
class RouteMatrixVehicleLicensePlate extends Shape
{
    /**
     * @param array{LastCharacter?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
