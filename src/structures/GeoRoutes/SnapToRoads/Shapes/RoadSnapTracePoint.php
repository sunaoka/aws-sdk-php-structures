<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\SnapToRoads\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $Heading
 * @property list<double> $Position
 * @property double $Speed
 * @property string $Timestamp
 */
class RoadSnapTracePoint extends Shape
{
    /**
     * @param array{
     *     Heading?: double,
     *     Position: list<double>,
     *     Speed?: double,
     *     Timestamp?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
