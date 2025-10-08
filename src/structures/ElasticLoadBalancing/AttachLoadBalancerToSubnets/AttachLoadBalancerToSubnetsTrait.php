<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\AttachLoadBalancerToSubnets;

trait AttachLoadBalancerToSubnetsTrait
{
    /**
     * @param AttachLoadBalancerToSubnetsRequest $args
     * @return AttachLoadBalancerToSubnetsResponse
     */
    public function attachLoadBalancerToSubnets(AttachLoadBalancerToSubnetsRequest $args)
    {
        $result = parent::attachLoadBalancerToSubnets($args->toArray());
        return new AttachLoadBalancerToSubnetsResponse($result->toArray());
    }
}
