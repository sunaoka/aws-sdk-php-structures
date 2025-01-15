<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\BatchGetFrameMetricData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property list<Shapes\FrameMetric>|null $frameMetrics
 * @property string|null $period
 * @property string $profilingGroupName
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property 'PT5M'|'PT1H'|'P1D'|null $targetResolution
 */
class BatchGetFrameMetricDataRequest extends Request
{
    /**
     * @param array{
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     frameMetrics?: list<Shapes\FrameMetric>|null,
     *     period?: string|null,
     *     profilingGroupName: string,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     targetResolution?: 'PT5M'|'PT1H'|'P1D'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
