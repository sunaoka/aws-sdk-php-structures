<?php

namespace Sunaoka\Aws\Structures\LocationService\ForecastGeofenceEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<double> $Position
 * @property double $Speed
 */
class ForecastGeofenceEventsDeviceState extends Shape
{
    /**
     * @param array{
     *     Position: list<double>,
     *     Speed?: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
