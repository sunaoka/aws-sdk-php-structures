<?php

namespace Sunaoka\Aws\Structures\GeoRoutes\SnapToRoads\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TracePointsHeadingIgnored'|'TracePointsIgnored'|'TracePointsMovedByLargeDistance'|'TracePointsNotMatched'|'TracePointsOutOfSequence'|'TracePointsSpeedEstimated'|'TracePointsSpeedIgnored' $Code
 * @property string $Title
 * @property list<int> $TracePointIndexes
 */
class RoadSnapNotice extends Shape
{
    /**
     * @param array{
     *     Code: 'TracePointsHeadingIgnored'|'TracePointsIgnored'|'TracePointsMovedByLargeDistance'|'TracePointsNotMatched'|'TracePointsOutOfSequence'|'TracePointsSpeedEstimated'|'TracePointsSpeedIgnored',
     *     Title: string,
     *     TracePointIndexes: list<int>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
