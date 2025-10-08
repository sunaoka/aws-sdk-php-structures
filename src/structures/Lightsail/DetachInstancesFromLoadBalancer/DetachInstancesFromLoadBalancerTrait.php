<?php

namespace Sunaoka\Aws\Structures\Lightsail\DetachInstancesFromLoadBalancer;

trait DetachInstancesFromLoadBalancerTrait
{
    /**
     * @param DetachInstancesFromLoadBalancerRequest $args
     * @return DetachInstancesFromLoadBalancerResponse
     */
    public function detachInstancesFromLoadBalancer(DetachInstancesFromLoadBalancerRequest $args)
    {
        $result = parent::detachInstancesFromLoadBalancer($args->toArray());
        return new DetachInstancesFromLoadBalancerResponse($result->toArray());
    }
}
