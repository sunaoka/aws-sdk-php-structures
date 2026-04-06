<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\ListLaunches\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, int<0, 100000>>|null $groupWeights
 * @property list<SegmentOverride>|null $segmentOverrides
 * @property \Aws\Api\DateTimeResult $startTime
 */
class ScheduledSplit extends Shape
{
    /**
     * @param array{
     *     groupWeights?: array<string, int<0, 100000>>|null,
     *     segmentOverrides?: list<SegmentOverride>|null,
     *     startTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
