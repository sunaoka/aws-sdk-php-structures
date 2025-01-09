<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\DescribeLoadBalancers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Listener $Listener
 * @property list<string> $PolicyNames
 */
class ListenerDescription extends Shape
{
    /**
     * @param array{
     *     Listener?: Listener,
     *     PolicyNames?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
