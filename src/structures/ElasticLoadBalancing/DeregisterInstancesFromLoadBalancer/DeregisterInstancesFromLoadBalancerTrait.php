<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\DeregisterInstancesFromLoadBalancer;

trait DeregisterInstancesFromLoadBalancerTrait
{
    /**
     * @param DeregisterInstancesFromLoadBalancerRequest $args
     * @return DeregisterInstancesFromLoadBalancerResponse
     */
    public function deregisterInstancesFromLoadBalancer(DeregisterInstancesFromLoadBalancerRequest $args)
    {
        $result = parent::deregisterInstancesFromLoadBalancer($args->toArray());
        return new DeregisterInstancesFromLoadBalancerResponse($result->toArray());
    }
}
