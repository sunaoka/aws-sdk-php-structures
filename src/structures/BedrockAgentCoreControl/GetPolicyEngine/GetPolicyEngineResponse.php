<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetPolicyEngine;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $policyEngineId
 * @property string $name
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $policyEngineArn
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED' $status
 * @property list<string> $statusReasons
 */
class GetPolicyEngineResponse extends Response
{
}
