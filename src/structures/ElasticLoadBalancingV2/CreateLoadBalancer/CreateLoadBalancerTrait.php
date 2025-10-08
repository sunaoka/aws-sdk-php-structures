<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\CreateLoadBalancer;

trait CreateLoadBalancerTrait
{
    /**
     * @param CreateLoadBalancerRequest $args
     * @return CreateLoadBalancerResponse
     */
    public function createLoadBalancer(CreateLoadBalancerRequest $args)
    {
        $result = parent::createLoadBalancer($args->toArray());
        return new CreateLoadBalancerResponse($result->toArray());
    }
}
