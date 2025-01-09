<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\DeleteLoadBalancerListeners;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LoadBalancerName
 * @property list<int> $LoadBalancerPorts
 */
class DeleteLoadBalancerListenersRequest extends Request
{
    /**
     * @param array{
     *     LoadBalancerName: string,
     *     LoadBalancerPorts: list<int>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
