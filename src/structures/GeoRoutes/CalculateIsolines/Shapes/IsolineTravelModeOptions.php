<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateIsolines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IsolineCarOptions $Car
 * @property IsolineScooterOptions $Scooter
 * @property IsolineTruckOptions $Truck
 */
class IsolineTravelModeOptions extends Shape
{
    /**
     * @param array{
     *     Car?: IsolineCarOptions,
     *     Scooter?: IsolineScooterOptions,
     *     Truck?: IsolineTruckOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
