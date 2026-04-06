<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\DeleteAgentVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $agentId
 * @property 'CREATING'|'PREPARING'|'PREPARED'|'NOT_PREPARED'|'DELETING'|'FAILED'|'VERSIONING'|'UPDATING' $agentStatus
 * @property string $agentVersion
 */
class DeleteAgentVersionResponse extends Response
{
}
