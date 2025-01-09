<?php

namespace Sunaoka\Aws\Structures\SavingsPlans\DescribeSavingsPlans\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'region'|'ec2-instance-family'|'commitment'|'upfront'|'term'|'savings-plan-type'|'payment-option'|'start'|'end' $name
 * @property list<string> $values
 */
class SavingsPlanFilter extends Shape
{
    /**
     * @param array{
     *     name?: 'region'|'ec2-instance-family'|'commitment'|'upfront'|'term'|'savings-plan-type'|'payment-option'|'start'|'end',
     *     values?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
