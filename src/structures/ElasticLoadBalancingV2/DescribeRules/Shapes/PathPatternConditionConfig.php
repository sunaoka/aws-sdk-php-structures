<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Values
 */
class PathPatternConditionConfig extends Shape
{
    /**
     * @param array{Values?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
