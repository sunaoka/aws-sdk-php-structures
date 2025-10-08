<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\DeleteLoadBalancerListeners;

trait DeleteLoadBalancerListenersTrait
{
    /**
     * @param DeleteLoadBalancerListenersRequest $args
     * @return DeleteLoadBalancerListenersResponse
     */
    public function deleteLoadBalancerListeners(DeleteLoadBalancerListenersRequest $args)
    {
        $result = parent::deleteLoadBalancerListeners($args->toArray());
        return new DeleteLoadBalancerListenersResponse($result->toArray());
    }
}
