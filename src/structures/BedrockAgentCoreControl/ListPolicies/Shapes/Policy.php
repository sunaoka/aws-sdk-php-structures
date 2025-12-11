<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $policyId
 * @property string $name
 * @property string $policyEngineId
 * @property PolicyDefinition $definition
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $policyArn
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED' $status
 * @property list<string> $statusReasons
 */
class Policy extends Shape
{
    /**
     * @param array{
     *     policyId: string,
     *     name: string,
     *     policyEngineId: string,
     *     definition: PolicyDefinition,
     *     description?: string|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     policyArn: string,
     *     status: 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED',
     *     statusReasons: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
