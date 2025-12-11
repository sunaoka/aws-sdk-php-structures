<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListPolicyEngines\Shapes;

use Sunaoka\Aws\Structures\Shape;

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
class PolicyEngine extends Shape
{
    /**
     * @param array{
     *     policyEngineId: string,
     *     name: string,
     *     description?: string|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     policyEngineArn: string,
     *     status: 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED',
     *     statusReasons: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
