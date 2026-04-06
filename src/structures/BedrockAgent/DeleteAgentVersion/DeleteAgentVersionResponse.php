<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\DeleteAgentVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $agentId
 * @property string $agentVersion
 * @property 'CREATING'|'PREPARING'|'PREPARED'|'NOT_PREPARED'|'DELETING'|'FAILED'|'VERSIONING'|'UPDATING' $agentStatus
 */
class DeleteAgentVersionResponse extends Response
{
}
