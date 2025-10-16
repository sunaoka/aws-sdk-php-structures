<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\ModifyRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Values
 * @property list<string>|null $RegexValues
 */
class PathPatternConditionConfig extends Shape
{
    /**
     * @param array{
     *     Values?: list<string>|null,
     *     RegexValues?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
