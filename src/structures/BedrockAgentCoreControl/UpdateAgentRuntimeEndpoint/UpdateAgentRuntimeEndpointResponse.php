<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateAgentRuntimeEndpoint;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $liveVersion
 * @property string|null $targetVersion
 * @property string $agentRuntimeEndpointArn
 * @property string $agentRuntimeArn
 * @property 'CREATING'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'READY'|'DELETING' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 */
class UpdateAgentRuntimeEndpointResponse extends Response
{
}
