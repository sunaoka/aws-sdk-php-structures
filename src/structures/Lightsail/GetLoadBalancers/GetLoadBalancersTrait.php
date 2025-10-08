<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetLoadBalancers;

trait GetLoadBalancersTrait
{
    /**
     * @param GetLoadBalancersRequest $args
     * @return GetLoadBalancersResponse
     */
    public function getLoadBalancers(GetLoadBalancersRequest $args)
    {
        $result = parent::getLoadBalancers($args->toArray());
        return new GetLoadBalancersResponse($result->toArray());
    }
}
