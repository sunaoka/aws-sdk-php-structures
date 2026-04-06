<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\SnapToRoads\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $Heading
 * @property list<double> $Position
 * @property double|null $Speed
 * @property string|null $Timestamp
 */
class RoadSnapTracePoint extends Shape
{
    /**
     * @param array{
     *     Heading?: double|null,
     *     Position: list<double>,
     *     Speed?: double|null,
     *     Timestamp?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
