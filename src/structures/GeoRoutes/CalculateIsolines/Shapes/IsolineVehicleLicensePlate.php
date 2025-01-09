<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateIsolines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LastCharacter
 */
class IsolineVehicleLicensePlate extends Shape
{
    /**
     * @param array{LastCharacter?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
