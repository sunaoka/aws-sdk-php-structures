<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListAgentRuntimeVersionsByCapacityProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agentRuntimeArn
 * @property string $agentRuntimeVersion
 * @property 'CREATING'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'READY'|'DELETING' $status
 */
class AgentRuntimeVersionSummary extends Shape
{
    /**
     * @param array{
     *     agentRuntimeArn: string,
     *     agentRuntimeVersion: string,
     *     status: 'CREATING'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'READY'|'DELETING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
