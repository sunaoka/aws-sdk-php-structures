<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\RegisterInstancesWithLoadBalancer;

trait RegisterInstancesWithLoadBalancerTrait
{
    /**
     * @param RegisterInstancesWithLoadBalancerRequest $args
     * @return RegisterInstancesWithLoadBalancerResponse
     */
    public function registerInstancesWithLoadBalancer(RegisterInstancesWithLoadBalancerRequest $args)
    {
        $result = parent::registerInstancesWithLoadBalancer($args->toArray());
        return new RegisterInstancesWithLoadBalancerResponse($result->toArray());
    }
}
