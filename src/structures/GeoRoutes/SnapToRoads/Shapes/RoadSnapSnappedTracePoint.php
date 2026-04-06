<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\SnapToRoads\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $Confidence
 * @property list<double> $OriginalPosition
 * @property list<double> $SnappedPosition
 */
class RoadSnapSnappedTracePoint extends Shape
{
    /**
     * @param array{
     *     Confidence: double,
     *     OriginalPosition: list<double>,
     *     SnappedPosition: list<double>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
