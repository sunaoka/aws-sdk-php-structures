<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\UpdateAgentInsight;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $agentInsightId
 * @property 'ACTIVE'|'ARCHIVED' $archiveStatus
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class UpdateAgentInsightResponse extends Response
{
}
