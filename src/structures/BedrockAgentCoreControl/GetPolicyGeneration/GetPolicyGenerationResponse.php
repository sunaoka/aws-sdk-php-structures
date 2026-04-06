<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetPolicyGeneration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $policyEngineId
 * @property string $policyGenerationId
 * @property string $name
 * @property string $policyGenerationArn
 * @property Shapes\ResourceShape $resource
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property 'GENERATING'|'GENERATED'|'GENERATE_FAILED'|'DELETE_FAILED' $status
 * @property list<string> $statusReasons
 * @property string|null $findings
 */
class GetPolicyGenerationResponse extends Response
{
}
