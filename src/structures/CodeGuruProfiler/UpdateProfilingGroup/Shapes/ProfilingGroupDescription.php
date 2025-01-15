<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\UpdateProfilingGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AgentOrchestrationConfig|null $agentOrchestrationConfig
 * @property string|null $arn
 * @property 'Default'|'AWSLambda'|null $computePlatform
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $name
 * @property ProfilingStatus|null $profilingStatus
 * @property array<string, string>|null $tags
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class ProfilingGroupDescription extends Shape
{
    /**
     * @param array{
     *     agentOrchestrationConfig?: AgentOrchestrationConfig|null,
     *     arn?: string|null,
     *     computePlatform?: 'Default'|'AWSLambda'|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     name?: string|null,
     *     profilingStatus?: ProfilingStatus|null,
     *     tags?: array<string, string>|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
