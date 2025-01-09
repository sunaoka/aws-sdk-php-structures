<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetJourney\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $Latitude
 * @property double $Longitude
 */
class GPSCoordinates extends Shape
{
    /**
     * @param array{
     *     Latitude: double,
     *     Longitude: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
