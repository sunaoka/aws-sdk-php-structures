<?php

namespace Sunaoka\Aws\Structures\Rekognition\DescribeStreamProcessor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BoundingBox $BoundingBox
 * @property list<Point> $Polygon
 */
class RegionOfInterest extends Shape
{
    /**
     * @param array{
     *     BoundingBox?: BoundingBox,
     *     Polygon?: list<Point>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
