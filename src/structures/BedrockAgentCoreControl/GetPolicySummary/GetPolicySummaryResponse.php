<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetPolicySummary;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $policyId
 * @property string $name
 * @property string $policyEngineId
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $policyArn
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED' $status
 */
class GetPolicySummaryResponse extends Response
{
}
