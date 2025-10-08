<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\DisableAvailabilityZonesForLoadBalancer;

trait DisableAvailabilityZonesForLoadBalancerTrait
{
    /**
     * @param DisableAvailabilityZonesForLoadBalancerRequest $args
     * @return DisableAvailabilityZonesForLoadBalancerResponse
     */
    public function disableAvailabilityZonesForLoadBalancer(DisableAvailabilityZonesForLoadBalancerRequest $args)
    {
        $result = parent::disableAvailabilityZonesForLoadBalancer($args->toArray());
        return new DisableAvailabilityZonesForLoadBalancerResponse($result->toArray());
    }
}
