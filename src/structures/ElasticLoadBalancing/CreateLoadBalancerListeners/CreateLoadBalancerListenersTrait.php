<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\CreateLoadBalancerListeners;

trait CreateLoadBalancerListenersTrait
{
    /**
     * @param CreateLoadBalancerListenersRequest $args
     * @return CreateLoadBalancerListenersResponse
     */
    public function createLoadBalancerListeners(CreateLoadBalancerListenersRequest $args)
    {
        $result = parent::createLoadBalancerListeners($args->toArray());
        return new CreateLoadBalancerListenersResponse($result->toArray());
    }
}
