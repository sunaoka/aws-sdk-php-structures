<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\ConfigureAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<'SamplingIntervalInMilliseconds'|'ReportingIntervalInMilliseconds'|'MinimumTimeForReportingInMilliseconds'|'MemoryUsageLimitPercent'|'MaxStackDepth', string> $agentParameters
 * @property int $periodInSeconds
 * @property bool $shouldProfile
 */
class AgentConfiguration extends Shape
{
    /**
     * @param array{
     *     agentParameters?: array<'SamplingIntervalInMilliseconds'|'ReportingIntervalInMilliseconds'|'MinimumTimeForReportingInMilliseconds'|'MemoryUsageLimitPercent'|'MaxStackDepth', string>,
     *     periodInSeconds: int,
     *     shouldProfile: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
