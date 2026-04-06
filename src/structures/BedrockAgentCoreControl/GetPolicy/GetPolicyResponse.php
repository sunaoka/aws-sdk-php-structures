<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetPolicy;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $policyId
 * @property string $name
 * @property string $policyEngineId
 * @property Shapes\PolicyDefinition $definition
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $policyArn
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED' $status
 * @property list<string> $statusReasons
 */
class GetPolicyResponse extends Response
{
}
