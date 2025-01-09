<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\DeleteAgent;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $agentId
 * @property 'CREATING'|'PREPARING'|'PREPARED'|'NOT_PREPARED'|'DELETING'|'FAILED'|'VERSIONING'|'UPDATING' $agentStatus
 */
class DeleteAgentResponse extends Response
{
}
