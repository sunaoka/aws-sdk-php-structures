<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\BatchGetFrameMetricData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $endTime
 * @property list<Shapes\FrameMetric> $frameMetrics
 * @property string $period
 * @property string $profilingGroupName
 * @property \Aws\Api\DateTimeResult $startTime
 * @property 'PT5M'|'PT1H'|'P1D' $targetResolution
 */
class BatchGetFrameMetricDataRequest extends Request
{
    /**
     * @param array{
     *     endTime?: \Aws\Api\DateTimeResult,
     *     frameMetrics?: list<Shapes\FrameMetric>,
     *     period?: string,
     *     profilingGroupName: string,
     *     startTime?: \Aws\Api\DateTimeResult,
     *     targetResolution?: 'PT5M'|'PT1H'|'P1D'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
