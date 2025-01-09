<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\CreateLaunch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, int> $groupWeights
 * @property list<SegmentOverride> $segmentOverrides
 * @property \Aws\Api\DateTimeResult $startTime
 */
class ScheduledSplitConfig extends Shape
{
    /**
     * @param array{
     *     groupWeights: array<string, int>,
     *     segmentOverrides?: list<SegmentOverride>,
     *     startTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
