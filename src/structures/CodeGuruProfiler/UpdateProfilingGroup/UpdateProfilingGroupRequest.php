<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\UpdateProfilingGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AgentOrchestrationConfig $agentOrchestrationConfig
 * @property string $profilingGroupName
 */
class UpdateProfilingGroupRequest extends Request
{
    /**
     * @param array{
     *     agentOrchestrationConfig: Shapes\AgentOrchestrationConfig,
     *     profilingGroupName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
