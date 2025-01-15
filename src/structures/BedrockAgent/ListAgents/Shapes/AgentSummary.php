<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListAgents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agentId
 * @property string $agentName
 * @property 'CREATING'|'PREPARING'|'PREPARED'|'NOT_PREPARED'|'DELETING'|'FAILED'|'VERSIONING'|'UPDATING' $agentStatus
 * @property string|null $description
 * @property GuardrailConfiguration|null $guardrailConfiguration
 * @property string|null $latestAgentVersion
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class AgentSummary extends Shape
{
    /**
     * @param array{
     *     agentId: string,
     *     agentName: string,
     *     agentStatus: 'CREATING'|'PREPARING'|'PREPARED'|'NOT_PREPARED'|'DELETING'|'FAILED'|'VERSIONING'|'UPDATING',
     *     description?: string|null,
     *     guardrailConfiguration?: GuardrailConfiguration|null,
     *     latestAgentVersion?: string|null,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
