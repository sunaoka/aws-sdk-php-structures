<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetSegmentVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SetDimension $Country
 * @property GPSPointDimension $GPSPoint
 */
class SegmentLocation extends Shape
{
    /**
     * @param array{
     *     Country?: SetDimension,
     *     GPSPoint?: GPSPointDimension
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
