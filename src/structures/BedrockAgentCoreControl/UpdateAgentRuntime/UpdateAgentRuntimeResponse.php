<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateAgentRuntime;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $agentRuntimeArn
 * @property string $agentRuntimeId
 * @property Shapes\WorkloadIdentityDetails|null $workloadIdentityDetails
 * @property string $agentRuntimeVersion
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property 'CREATING'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'READY'|'DELETING'|'DELETE_FAILED' $status
 */
class UpdateAgentRuntimeResponse extends Response
{
}
