<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\ModifyRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<QueryStringKeyValuePair>|null $Values
 */
class QueryStringConditionConfig extends Shape
{
    /**
     * @param array{Values?: list<QueryStringKeyValuePair>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
