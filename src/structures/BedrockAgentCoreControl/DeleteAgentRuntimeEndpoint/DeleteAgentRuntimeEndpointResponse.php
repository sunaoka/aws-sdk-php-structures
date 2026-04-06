<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteAgentRuntimeEndpoint;

use Sunaoka\Aws\Structures\Response;

/**
 * @property 'CREATING'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'READY'|'DELETING' $status
 * @property string|null $agentRuntimeId
 * @property string|null $endpointName
 */
class DeleteAgentRuntimeEndpointResponse extends Response
{
}
