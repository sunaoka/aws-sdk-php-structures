<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\UpdateAutomationRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'StringEquals'|'StringNotEquals'|'StringEqualsIgnoreCase'|'StringNotEqualsIgnoreCase'|'StringLike'|'StringNotLike'|'NumericEquals'|'NumericNotEquals'|'NumericLessThan'|'NumericLessThanEquals'|'NumericGreaterThan'|'NumericGreaterThanEquals'|null $comparison
 * @property list<double>|null $values
 */
class DoubleCriteriaCondition extends Shape
{
    /**
     * @param array{
     *     comparison?: 'StringEquals'|'StringNotEquals'|'StringEqualsIgnoreCase'|'StringNotEqualsIgnoreCase'|'StringLike'|'StringNotLike'|'NumericEquals'|'NumericNotEquals'|'NumericLessThan'|'NumericLessThanEquals'|'NumericGreaterThan'|'NumericGreaterThanEquals'|null,
     *     values?: list<double>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
