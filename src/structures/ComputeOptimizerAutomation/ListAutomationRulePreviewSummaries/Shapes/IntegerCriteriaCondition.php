<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\ListAutomationRulePreviewSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'StringEquals'|'StringNotEquals'|'StringEqualsIgnoreCase'|'StringNotEqualsIgnoreCase'|'StringLike'|'StringNotLike'|'NumericEquals'|'NumericNotEquals'|'NumericLessThan'|'NumericLessThanEquals'|'NumericGreaterThan'|'NumericGreaterThanEquals'|null $comparison
 * @property list<int>|null $values
 */
class IntegerCriteriaCondition extends Shape
{
    /**
     * @param array{
     *     comparison?: 'StringEquals'|'StringNotEquals'|'StringEqualsIgnoreCase'|'StringNotEqualsIgnoreCase'|'StringLike'|'StringNotLike'|'NumericEquals'|'NumericNotEquals'|'NumericLessThan'|'NumericLessThanEquals'|'NumericGreaterThan'|'NumericGreaterThanEquals'|null,
     *     values?: list<int>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
