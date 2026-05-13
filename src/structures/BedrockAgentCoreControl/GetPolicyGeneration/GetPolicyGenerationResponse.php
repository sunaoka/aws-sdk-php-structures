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
 * @property string|null $findings
 * @property list<string> $statusReasons
 */
class GetPolicyGenerationResponse extends Response
{
}
