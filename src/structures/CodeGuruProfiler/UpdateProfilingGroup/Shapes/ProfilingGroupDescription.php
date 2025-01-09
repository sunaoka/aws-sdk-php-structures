<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\UpdateProfilingGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AgentOrchestrationConfig $agentOrchestrationConfig
 * @property string $arn
 * @property 'Default'|'AWSLambda' $computePlatform
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $name
 * @property ProfilingStatus $profilingStatus
 * @property array<string, string> $tags
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class ProfilingGroupDescription extends Shape
{
    /**
     * @param array{
     *     agentOrchestrationConfig?: AgentOrchestrationConfig,
     *     arn?: string,
     *     computePlatform?: 'Default'|'AWSLambda',
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     name?: string,
     *     profilingStatus?: ProfilingStatus,
     *     tags?: array<string, string>,
     *     updatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
