<?php

namespace Sunaoka\Aws\Structures\RTBFabric\GetUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 1000> $priority
 * @property RuleCondition $conditions
 */
class RoutingRuleParameters extends Shape
{
    /**
     * @param array{
     *     priority: int<1, 1000>,
     *     conditions: RuleCondition
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
