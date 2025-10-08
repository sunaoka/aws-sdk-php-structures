<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateAgentRuntime;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $agentRuntimeArn
 * @property Shapes\WorkloadIdentityDetails|null $workloadIdentityDetails
 * @property string $agentRuntimeId
 * @property string $agentRuntimeVersion
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property 'CREATING'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'READY'|'DELETING' $status
 */
class CreateAgentRuntimeResponse extends Response
{
}
