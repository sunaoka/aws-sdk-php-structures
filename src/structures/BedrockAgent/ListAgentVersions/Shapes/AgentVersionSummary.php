<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListAgentVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agentName
 * @property 'CREATING'|'PREPARING'|'PREPARED'|'NOT_PREPARED'|'DELETING'|'FAILED'|'VERSIONING'|'UPDATING' $agentStatus
 * @property string $agentVersion
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string|null $description
 * @property GuardrailConfiguration|null $guardrailConfiguration
 */
class AgentVersionSummary extends Shape
{
    /**
     * @param array{
     *     agentName: string,
     *     agentStatus: 'CREATING'|'PREPARING'|'PREPARED'|'NOT_PREPARED'|'DELETING'|'FAILED'|'VERSIONING'|'UPDATING',
     *     agentVersion: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     description?: string|null,
     *     guardrailConfiguration?: GuardrailConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
