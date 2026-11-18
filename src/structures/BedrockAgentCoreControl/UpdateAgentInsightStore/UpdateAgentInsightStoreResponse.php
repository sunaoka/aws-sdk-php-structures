<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateAgentInsightStore;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $agentInsightStoreArn
 * @property string $agentInsightStoreId
 * @property 'ACTIVE'|'UPDATING'|'INACTIVE'|'ERROR' $status
 * @property 'ENABLED'|'DISABLED' $enablementStatus
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string|null $failureReason
 */
class UpdateAgentInsightStoreResponse extends Response
{
}
