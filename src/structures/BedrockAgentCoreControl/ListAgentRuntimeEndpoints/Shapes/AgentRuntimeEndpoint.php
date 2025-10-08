<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListAgentRuntimeEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $liveVersion
 * @property string|null $targetVersion
 * @property string $agentRuntimeEndpointArn
 * @property string $agentRuntimeArn
 * @property 'CREATING'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'READY'|'DELETING' $status
 * @property string $id
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 */
class AgentRuntimeEndpoint extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     liveVersion?: string|null,
     *     targetVersion?: string|null,
     *     agentRuntimeEndpointArn: string,
     *     agentRuntimeArn: string,
     *     status: 'CREATING'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'READY'|'DELETING',
     *     id: string,
     *     description?: string|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     lastUpdatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
