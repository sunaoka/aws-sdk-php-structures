<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteAgentRuntime;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'CREATING'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'READY'|'DELETING'|'DELETE_FAILED' $status
 * @property string|null $agentRuntimeId
 * @property string|null $agentRuntimeVersion
 */
class DeleteAgentRuntimeResponse extends Response
{
}
