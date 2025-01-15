<?php

namespace Sunaoka\Aws\Structures\Rekognition\DetectCustomLabels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BoundingBox|null $BoundingBox
 * @property list<Point>|null $Polygon
 */
class Geometry extends Shape
{
    /**
     * @param array{
     *     BoundingBox?: BoundingBox|null,
     *     Polygon?: list<Point>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
