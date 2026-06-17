<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\ListAutomationRulePreviewSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'StringEquals'|'StringNotEquals'|'StringEqualsIgnoreCase'|'StringNotEqualsIgnoreCase'|'StringLike'|'StringNotLike'|'NumericEquals'|'NumericNotEquals'|'NumericLessThan'|'NumericLessThanEquals'|'NumericGreaterThan'|'NumericGreaterThanEquals'|'StringEqualsIfExists'|'StringNotEqualsIfExists'|'StringEqualsIgnoreCaseIfExists'|'StringNotEqualsIgnoreCaseIfExists'|'StringLikeIfExists'|'StringNotLikeIfExists'|'NumericEqualsIfExists'|'NumericNotEqualsIfExists'|'NumericLessThanIfExists'|'NumericLessThanEqualsIfExists'|'NumericGreaterThanIfExists'|'NumericGreaterThanEqualsIfExists'|null $comparison
 * @property list<int>|null $values
 */
class IntegerCriteriaCondition extends Shape
{
    /**
     * @param array{
     *     comparison?: 'StringEquals'|'StringNotEquals'|'StringEqualsIgnoreCase'|'StringNotEqualsIgnoreCase'|'StringLike'|'StringNotLike'|'NumericEquals'|'NumericNotEquals'|'NumericLessThan'|'NumericLessThanEquals'|'NumericGreaterThan'|'NumericGreaterThanEquals'|'StringEqualsIfExists'|'StringNotEqualsIfExists'|'StringEqualsIgnoreCaseIfExists'|'StringNotEqualsIgnoreCaseIfExists'|'StringLikeIfExists'|'StringNotLikeIfExists'|'NumericEqualsIfExists'|'NumericNotEqualsIfExists'|'NumericLessThanIfExists'|'NumericLessThanEqualsIfExists'|'NumericGreaterThanIfExists'|'NumericGreaterThanEqualsIfExists'|null,
     *     values?: list<int>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
