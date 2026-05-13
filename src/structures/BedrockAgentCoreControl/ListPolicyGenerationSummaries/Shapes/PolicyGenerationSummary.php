<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListPolicyGenerationSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $policyEngineId
 * @property string $policyGenerationId
 * @property string $name
 * @property string $policyGenerationArn
 * @property ResourceShape $resource
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property 'GENERATING'|'GENERATED'|'GENERATE_FAILED'|'DELETE_FAILED' $status
 * @property string|null $findings
 */
class PolicyGenerationSummary extends Shape
{
    /**
     * @param array{
     *     policyEngineId: string,
     *     policyGenerationId: string,
     *     name: string,
     *     policyGenerationArn: string,
     *     resource: ResourceShape,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     status: 'GENERATING'|'GENERATED'|'GENERATE_FAILED'|'DELETE_FAILED',
     *     findings?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
