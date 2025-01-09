<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\SetRulePriorities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RuleArn
 * @property int<1, 50000> $Priority
 */
class RulePriorityPair extends Shape
{
    /**
     * @param array{
     *     RuleArn?: string,
     *     Priority?: int<1, 50000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
