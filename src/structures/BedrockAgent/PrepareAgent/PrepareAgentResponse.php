<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\PrepareAgent;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $agentId
 * @property 'CREATING'|'PREPARING'|'PREPARED'|'NOT_PREPARED'|'DELETING'|'FAILED'|'VERSIONING'|'UPDATING' $agentStatus
 * @property string $agentVersion
 * @property \Aws\Api\DateTimeResult $preparedAt
 */
class PrepareAgentResponse extends Response
{
}
