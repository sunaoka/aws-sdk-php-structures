<?php

namespace Sunaoka\Aws\Structures\Lightsail\AttachInstancesToLoadBalancer;

trait AttachInstancesToLoadBalancerTrait
{
    /**
     * @param AttachInstancesToLoadBalancerRequest $args
     * @return AttachInstancesToLoadBalancerResponse
     */
    public function attachInstancesToLoadBalancer(AttachInstancesToLoadBalancerRequest $args)
    {
        $result = parent::attachInstancesToLoadBalancer($args->toArray());
        return new AttachInstancesToLoadBalancerResponse($result->toArray());
    }
}
