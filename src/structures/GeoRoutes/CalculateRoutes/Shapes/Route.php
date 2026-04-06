<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\CalculateRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RouteLeg> $Legs
 * @property list<RouteMajorRoadLabel> $MajorRoadLabels
 * @property RouteSummary|null $Summary
 */
class Route extends Shape
{
    /**
     * @param array{
     *     Legs: list<RouteLeg>,
     *     MajorRoadLabels: list<RouteMajorRoadLabel>,
     *     Summary?: RouteSummary|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
