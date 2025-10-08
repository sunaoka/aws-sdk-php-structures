<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\CreateLoadBalancer;

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
