<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\DeleteAgentAlias;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $agentId
 * @property string $agentAliasId
 * @property 'CREATING'|'PREPARED'|'FAILED'|'UPDATING'|'DELETING'|'DISSOCIATED' $agentAliasStatus
 */
class DeleteAgentAliasResponse extends Response
{
}
