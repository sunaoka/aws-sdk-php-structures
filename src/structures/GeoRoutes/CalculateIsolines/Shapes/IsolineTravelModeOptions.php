<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateIsolines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IsolineCarOptions|null $Car
 * @property IsolineScooterOptions|null $Scooter
 * @property IsolineTruckOptions|null $Truck
 */
class IsolineTravelModeOptions extends Shape
{
    /**
     * @param array{
     *     Car?: IsolineCarOptions|null,
     *     Scooter?: IsolineScooterOptions|null,
     *     Truck?: IsolineTruckOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
