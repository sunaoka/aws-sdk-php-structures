<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\DetachLoadBalancerFromSubnets;

trait DetachLoadBalancerFromSubnetsTrait
{
    /**
     * @param DetachLoadBalancerFromSubnetsRequest $args
     * @return DetachLoadBalancerFromSubnetsResponse
     */
    public function detachLoadBalancerFromSubnets(DetachLoadBalancerFromSubnetsRequest $args)
    {
        $result = parent::detachLoadBalancerFromSubnets($args->toArray());
        return new DetachLoadBalancerFromSubnetsResponse($result->toArray());
    }
}
