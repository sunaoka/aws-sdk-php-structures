<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateIsolines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LastCharacter
 */
class IsolineVehicleLicensePlate extends Shape
{
    /**
     * @param array{LastCharacter?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
