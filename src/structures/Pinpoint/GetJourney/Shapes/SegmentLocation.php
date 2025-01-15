<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetJourney\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SetDimension|null $Country
 * @property GPSPointDimension|null $GPSPoint
 */
class SegmentLocation extends Shape
{
    /**
     * @param array{
     *     Country?: SetDimension|null,
     *     GPSPoint?: GPSPointDimension|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
