<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\ListProfilingGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $latestAgentOrchestratedAt
 * @property \Aws\Api\DateTimeResult $latestAgentProfileReportedAt
 * @property AggregatedProfileTime $latestAggregatedProfile
 */
class ProfilingStatus extends Shape
{
    /**
     * @param array{
     *     latestAgentOrchestratedAt?: \Aws\Api\DateTimeResult,
     *     latestAgentProfileReportedAt?: \Aws\Api\DateTimeResult,
     *     latestAggregatedProfile?: AggregatedProfileTime
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
