<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListAgentVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agentName
 * @property 'CREATING'|'PREPARING'|'PREPARED'|'NOT_PREPARED'|'DELETING'|'FAILED'|'VERSIONING'|'UPDATING' $agentStatus
 * @property string $agentVersion
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $description
 * @property GuardrailConfiguration $guardrailConfiguration
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class AgentVersionSummary extends Shape
{
    /**
     * @param array{
     *     agentName: string,
     *     agentStatus: 'CREATING'|'PREPARING'|'PREPARED'|'NOT_PREPARED'|'DELETING'|'FAILED'|'VERSIONING'|'UPDATING',
     *     agentVersion: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     description?: string,
     *     guardrailConfiguration?: GuardrailConfiguration,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
