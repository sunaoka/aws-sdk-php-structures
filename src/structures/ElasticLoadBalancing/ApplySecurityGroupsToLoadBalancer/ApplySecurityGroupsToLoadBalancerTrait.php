<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\ApplySecurityGroupsToLoadBalancer;

trait ApplySecurityGroupsToLoadBalancerTrait
{
    /**
     * @param ApplySecurityGroupsToLoadBalancerRequest $args
     * @return ApplySecurityGroupsToLoadBalancerResponse
     */
    public function applySecurityGroupsToLoadBalancer(ApplySecurityGroupsToLoadBalancerRequest $args)
    {
        $result = parent::applySecurityGroupsToLoadBalancer($args->toArray());
        return new ApplySecurityGroupsToLoadBalancerResponse($result->toArray());
    }
}
