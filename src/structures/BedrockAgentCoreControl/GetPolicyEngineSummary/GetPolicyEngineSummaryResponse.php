<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetPolicyEngineSummary;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $policyEngineId
 * @property string $name
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $policyEngineArn
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED' $status
 * @property string|null $encryptionKeyArn
 */
class GetPolicyEngineSummaryResponse extends Response
{
}
