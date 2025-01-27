<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\DeleteAgentAlias;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $agentAliasId
 * @property 'CREATING'|'PREPARED'|'FAILED'|'UPDATING'|'DELETING'|'DISSOCIATED' $agentAliasStatus
 * @property string $agentId
 */
class DeleteAgentAliasResponse extends Response
{
}
