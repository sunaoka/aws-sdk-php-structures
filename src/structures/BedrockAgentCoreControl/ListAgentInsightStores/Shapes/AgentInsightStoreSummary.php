<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListAgentInsightStores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agentInsightStoreArn
 * @property string $agentInsightStoreId
 * @property 'ACTIVE'|'UPDATING'|'INACTIVE'|'ERROR' $status
 * @property 'ENABLED'|'DISABLED' $enablementStatus
 * @property AgentInsightStoreEncryptionConfiguration $encryptionConfiguration
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class AgentInsightStoreSummary extends Shape
{
    /**
     * @param array{
     *     agentInsightStoreArn: string,
     *     agentInsightStoreId: string,
     *     status: 'ACTIVE'|'UPDATING'|'INACTIVE'|'ERROR',
     *     enablementStatus: 'ENABLED'|'DISABLED',
     *     encryptionConfiguration: AgentInsightStoreEncryptionConfiguration,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
