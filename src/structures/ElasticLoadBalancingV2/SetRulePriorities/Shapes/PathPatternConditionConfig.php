<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\SetRulePriorities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Values
 */
class PathPatternConditionConfig extends Shape
{
    /**
     * @param array{Values?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
