<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListPolicySummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $policyId
 * @property string $name
 * @property string $policyEngineId
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $policyArn
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED' $status
 * @property 'ACTIVE'|'LOG_ONLY'|null $enforcementMode
 */
class PolicySummary extends Shape
{
    /**
     * @param array{
     *     policyId: string,
     *     name: string,
     *     policyEngineId: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     policyArn: string,
     *     status: 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED',
     *     enforcementMode?: 'ACTIVE'|'LOG_ONLY'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
