<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetLoadBalancerTlsPolicies;

trait GetLoadBalancerTlsPoliciesTrait
{
    /**
     * @param GetLoadBalancerTlsPoliciesRequest $args
     * @return GetLoadBalancerTlsPoliciesResponse
     */
    public function getLoadBalancerTlsPolicies(GetLoadBalancerTlsPoliciesRequest $args)
    {
        $result = parent::getLoadBalancerTlsPolicies($args->toArray());
        return new GetLoadBalancerTlsPoliciesResponse($result->toArray());
    }
}
