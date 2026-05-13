<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListPolicyEngineSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $policyEngineId
 * @property string $name
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $policyEngineArn
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED' $status
 * @property string|null $encryptionKeyArn
 */
class PolicyEngineSummary extends Shape
{
    /**
     * @param array{
     *     policyEngineId: string,
     *     name: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     policyEngineArn: string,
     *     status: 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED',
     *     encryptionKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
