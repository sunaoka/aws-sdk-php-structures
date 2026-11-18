<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ListAgentInsights\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FAILURE' $type
 * @property string $name
 * @property string $description
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property int<0, max>|null $affectedSessionCount
 * @property string $agentInsightId
 * @property string $applicationName
 * @property string|null $batchEvaluationId
 * @property 'AVAILABLE'|'CUSTOMER_KEY_UNAVAILABLE'|'UNAVAILABLE' $customerMetadataStatus
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property 'ACTIVE'|'ARCHIVED' $archiveStatus
 * @property \Aws\Api\DateTimeResult|null $lastSeenAt
 */
class AgentInsightSummary extends Shape
{
    /**
     * @param array{
     *     type: 'FAILURE',
     *     name: string,
     *     description: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     affectedSessionCount?: int<0, max>|null,
     *     agentInsightId: string,
     *     applicationName: string,
     *     batchEvaluationId?: string|null,
     *     customerMetadataStatus: 'AVAILABLE'|'CUSTOMER_KEY_UNAVAILABLE'|'UNAVAILABLE',
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     archiveStatus: 'ACTIVE'|'ARCHIVED',
     *     lastSeenAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
