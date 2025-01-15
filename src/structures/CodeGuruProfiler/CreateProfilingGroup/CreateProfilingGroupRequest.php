<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\CreateProfilingGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AgentOrchestrationConfig|null $agentOrchestrationConfig
 * @property string $clientToken
 * @property 'Default'|'AWSLambda'|null $computePlatform
 * @property string $profilingGroupName
 * @property array<string, string>|null $tags
 */
class CreateProfilingGroupRequest extends Request
{
    /**
     * @param array{
     *     agentOrchestrationConfig?: Shapes\AgentOrchestrationConfig|null,
     *     clientToken: string,
     *     computePlatform?: 'Default'|'AWSLambda'|null,
     *     profilingGroupName: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
