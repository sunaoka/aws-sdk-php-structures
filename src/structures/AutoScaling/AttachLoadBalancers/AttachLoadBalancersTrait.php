<?php

namespace Sunaoka\Aws\Structures\AutoScaling\AttachLoadBalancers;

trait AttachLoadBalancersTrait
{
    /**
     * @param AttachLoadBalancersRequest $args
     * @return AttachLoadBalancersResponse
     */
    public function attachLoadBalancers(AttachLoadBalancersRequest $args)
    {
        $result = parent::attachLoadBalancers($args->toArray());
        return new AttachLoadBalancersResponse($result->toArray());
    }
}
