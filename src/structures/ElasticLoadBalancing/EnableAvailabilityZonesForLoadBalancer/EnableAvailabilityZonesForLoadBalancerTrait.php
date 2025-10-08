<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\EnableAvailabilityZonesForLoadBalancer;

trait EnableAvailabilityZonesForLoadBalancerTrait
{
    /**
     * @param EnableAvailabilityZonesForLoadBalancerRequest $args
     * @return EnableAvailabilityZonesForLoadBalancerResponse
     */
    public function enableAvailabilityZonesForLoadBalancer(EnableAvailabilityZonesForLoadBalancerRequest $args)
    {
        $result = parent::enableAvailabilityZonesForLoadBalancer($args->toArray());
        return new EnableAvailabilityZonesForLoadBalancerResponse($result->toArray());
    }
}
