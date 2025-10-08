<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetAgentRuntimeEndpoint;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $liveVersion
 * @property string|null $targetVersion
 * @property string $agentRuntimeEndpointArn
 * @property string $agentRuntimeArn
 * @property string|null $description
 * @property 'CREATING'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'READY'|'DELETING' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property string|null $failureReason
 * @property string $name
 * @property string $id
 */
class GetAgentRuntimeEndpointResponse extends Response
{
}
