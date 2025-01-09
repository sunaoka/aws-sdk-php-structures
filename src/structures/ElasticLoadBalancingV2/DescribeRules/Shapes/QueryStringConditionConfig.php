<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<QueryStringKeyValuePair> $Values
 */
class QueryStringConditionConfig extends Shape
{
    /**
     * @param array{Values?: list<QueryStringKeyValuePair>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
