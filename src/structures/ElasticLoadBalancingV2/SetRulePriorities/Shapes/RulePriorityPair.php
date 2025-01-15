<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\SetRulePriorities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RuleArn
 * @property int<1, 50000>|null $Priority
 */
class RulePriorityPair extends Shape
{
    /**
     * @param array{
     *     RuleArn?: string|null,
     *     Priority?: int<1, 50000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
