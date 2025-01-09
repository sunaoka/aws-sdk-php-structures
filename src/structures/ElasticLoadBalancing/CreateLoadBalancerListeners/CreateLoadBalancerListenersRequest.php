<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\CreateLoadBalancerListeners;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LoadBalancerName
 * @property list<Shapes\Listener> $Listeners
 */
class CreateLoadBalancerListenersRequest extends Request
{
    /**
     * @param array{
     *     LoadBalancerName: string,
     *     Listeners: list<Shapes\Listener>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
