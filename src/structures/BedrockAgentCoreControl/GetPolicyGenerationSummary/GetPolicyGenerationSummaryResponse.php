<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetPolicyGenerationSummary;

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
 */
class GetPolicyGenerationSummaryResponse extends Response
{
}
