<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\CreateProfilingGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AgentOrchestrationConfig $agentOrchestrationConfig
 * @property string $clientToken
 * @property 'Default'|'AWSLambda' $computePlatform
 * @property string $profilingGroupName
 * @property array<string, string> $tags
 */
class CreateProfilingGroupRequest extends Request
{
    /**
     * @param array{
     *     agentOrchestrationConfig?: Shapes\AgentOrchestrationConfig,
     *     clientToken: string,
     *     computePlatform?: 'Default'|'AWSLambda',
     *     profilingGroupName: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
