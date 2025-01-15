<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\DescribeLoadBalancers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Listener|null $Listener
 * @property list<string>|null $PolicyNames
 */
class ListenerDescription extends Shape
{
    /**
     * @param array{
     *     Listener?: Listener|null,
     *     PolicyNames?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
