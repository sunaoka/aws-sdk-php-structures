<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetLoadBalancer;

trait GetLoadBalancerTrait
{
    /**
     * @param GetLoadBalancerRequest $args
     * @return GetLoadBalancerResponse
     */
    public function getLoadBalancer(GetLoadBalancerRequest $args)
    {
        $result = parent::getLoadBalancer($args->toArray());
        return new GetLoadBalancerResponse($result->toArray());
    }
}
