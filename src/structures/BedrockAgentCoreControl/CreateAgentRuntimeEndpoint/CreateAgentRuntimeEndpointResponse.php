<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateAgentRuntimeEndpoint;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $targetVersion
 * @property string $agentRuntimeEndpointArn
 * @property string $agentRuntimeArn
 * @property string|null $agentRuntimeId
 * @property string|null $endpointName
 * @property 'CREATING'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'READY'|'DELETING' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 */
class CreateAgentRuntimeEndpointResponse extends Response
{
}
