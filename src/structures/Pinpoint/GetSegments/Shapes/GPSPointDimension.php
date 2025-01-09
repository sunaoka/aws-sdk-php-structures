<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetSegments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GPSCoordinates $Coordinates
 * @property double $RangeInKilometers
 */
class GPSPointDimension extends Shape
{
    /**
     * @param array{
     *     Coordinates: GPSCoordinates,
     *     RangeInKilometers?: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
