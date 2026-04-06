<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\UpdateLaunch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, int<0, 100000>> $groupWeights
 * @property list<SegmentOverride>|null $segmentOverrides
 * @property \Aws\Api\DateTimeResult $startTime
 */
class ScheduledSplitConfig extends Shape
{
    /**
     * @param array{
     *     groupWeights: array<string, int<0, 100000>>,
     *     segmentOverrides?: list<SegmentOverride>|null,
     *     startTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
