<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\UpdateAutomationRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'StringEquals'|'StringNotEquals'|'StringEqualsIgnoreCase'|'StringNotEqualsIgnoreCase'|'StringLike'|'StringNotLike'|'NumericEquals'|'NumericNotEquals'|'NumericLessThan'|'NumericLessThanEquals'|'NumericGreaterThan'|'NumericGreaterThanEquals'|'StringEqualsIfExists'|'StringNotEqualsIfExists'|'StringEqualsIgnoreCaseIfExists'|'StringNotEqualsIgnoreCaseIfExists'|'StringLikeIfExists'|'StringNotLikeIfExists'|'NumericEqualsIfExists'|'NumericNotEqualsIfExists'|'NumericLessThanIfExists'|'NumericLessThanEqualsIfExists'|'NumericGreaterThanIfExists'|'NumericGreaterThanEqualsIfExists'|null $comparison
 * @property string|null $key
 * @property list<string>|null $values
 */
class ResourceTagsCriteriaCondition extends Shape
{
    /**
     * @param array{
     *     comparison?: 'StringEquals'|'StringNotEquals'|'StringEqualsIgnoreCase'|'StringNotEqualsIgnoreCase'|'StringLike'|'StringNotLike'|'NumericEquals'|'NumericNotEquals'|'NumericLessThan'|'NumericLessThanEquals'|'NumericGreaterThan'|'NumericGreaterThanEquals'|'StringEqualsIfExists'|'StringNotEqualsIfExists'|'StringEqualsIgnoreCaseIfExists'|'StringNotEqualsIgnoreCaseIfExists'|'StringLikeIfExists'|'StringNotLikeIfExists'|'NumericEqualsIfExists'|'NumericNotEqualsIfExists'|'NumericLessThanIfExists'|'NumericLessThanEqualsIfExists'|'NumericGreaterThanIfExists'|'NumericGreaterThanEqualsIfExists'|null,
     *     key?: string|null,
     *     values?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
