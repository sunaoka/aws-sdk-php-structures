<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListGatewayRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ruleId
 * @property string $gatewayArn
 * @property int<1, 1000000> $priority
 * @property list<Condition>|null $conditions
 * @property list<Action> $actions
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING' $status
 * @property SystemManagedBlock|null $system
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class GatewayRuleDetail extends Shape
{
    /**
     * @param array{
     *     ruleId: string,
     *     gatewayArn: string,
     *     priority: int<1, 1000000>,
     *     conditions?: list<Condition>|null,
     *     actions: list<Action>,
     *     description?: string|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     status: 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING',
     *     system?: SystemManagedBlock|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
