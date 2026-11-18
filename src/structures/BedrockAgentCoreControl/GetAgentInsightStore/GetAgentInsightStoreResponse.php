<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetAgentInsightStore;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $agentInsightStoreArn
 * @property string $agentInsightStoreId
 * @property 'ACTIVE'|'UPDATING'|'INACTIVE'|'ERROR' $status
 * @property 'ENABLED'|'DISABLED' $enablementStatus
 * @property Shapes\AgentInsightStoreEncryptionConfiguration $encryptionConfiguration
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string|null $failureReason
 */
class GetAgentInsightStoreResponse extends Response
{
}
