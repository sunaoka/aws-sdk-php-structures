<?php

namespace Sunaoka\Aws\Structures\Pinpoint\CreateSegment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GPSCoordinates $Coordinates
 * @property double|null $RangeInKilometers
 */
class GPSPointDimension extends Shape
{
    /**
     * @param array{
     *     Coordinates: GPSCoordinates,
     *     RangeInKilometers?: double|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
