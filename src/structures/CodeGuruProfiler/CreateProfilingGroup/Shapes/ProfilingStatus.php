<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\CreateProfilingGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $latestAgentOrchestratedAt
 * @property \Aws\Api\DateTimeResult|null $latestAgentProfileReportedAt
 * @property AggregatedProfileTime|null $latestAggregatedProfile
 */
class ProfilingStatus extends Shape
{
    /**
     * @param array{
     *     latestAgentOrchestratedAt?: \Aws\Api\DateTimeResult|null,
     *     latestAgentProfileReportedAt?: \Aws\Api\DateTimeResult|null,
     *     latestAggregatedProfile?: AggregatedProfileTime|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
