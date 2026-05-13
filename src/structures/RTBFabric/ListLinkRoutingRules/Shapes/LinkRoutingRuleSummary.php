<?php

namespace Sunaoka\Aws\Structures\RTBFabric\ListLinkRoutingRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ruleId
 * @property int<1, 1000> $priority
 * @property RuleCondition $conditions
 * @property 'CREATION_IN_PROGRESS'|'ACTIVE'|'UPDATE_IN_PROGRESS'|'DELETION_IN_PROGRESS'|'DELETED'|'FAILED' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class LinkRoutingRuleSummary extends Shape
{
    /**
     * @param array{
     *     ruleId: string,
     *     priority: int<1, 1000>,
     *     conditions: RuleCondition,
     *     status: 'CREATION_IN_PROGRESS'|'ACTIVE'|'UPDATE_IN_PROGRESS'|'DELETION_IN_PROGRESS'|'DELETED'|'FAILED',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
