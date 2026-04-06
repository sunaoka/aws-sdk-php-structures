<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListAgentRuntimes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agentRuntimeArn
 * @property string $agentRuntimeId
 * @property string $agentRuntimeVersion
 * @property string $agentRuntimeName
 * @property string $description
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property 'CREATING'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'READY'|'DELETING' $status
 */
class AgentRuntime extends Shape
{
    /**
     * @param array{
     *     agentRuntimeArn: string,
     *     agentRuntimeId: string,
     *     agentRuntimeVersion: string,
     *     agentRuntimeName: string,
     *     description: string,
     *     lastUpdatedAt: \Aws\Api\DateTimeResult,
     *     status: 'CREATING'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'READY'|'DELETING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
