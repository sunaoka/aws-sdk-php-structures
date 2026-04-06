<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteAgentRuntime;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'CREATING'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'READY'|'DELETING' $status
 * @property string|null $agentRuntimeId
 */
class DeleteAgentRuntimeResponse extends Response
{
}
