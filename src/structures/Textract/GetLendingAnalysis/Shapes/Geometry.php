<?php

namespace Sunaoka\Aws\Structures\Textract\GetLendingAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BoundingBox|null $BoundingBox
 * @property list<Point>|null $Polygon
 * @property float|null $RotationAngle
 */
class Geometry extends Shape
{
    /**
     * @param array{
     *     BoundingBox?: BoundingBox|null,
     *     Polygon?: list<Point>|null,
     *     RotationAngle?: float|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
