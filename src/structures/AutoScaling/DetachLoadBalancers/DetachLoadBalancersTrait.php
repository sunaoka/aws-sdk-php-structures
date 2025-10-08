<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DetachLoadBalancers;

trait DetachLoadBalancersTrait
{
    /**
     * @param DetachLoadBalancersRequest $args
     * @return DetachLoadBalancersResponse
     */
    public function detachLoadBalancers(DetachLoadBalancersRequest $args)
    {
        $result = parent::detachLoadBalancers($args->toArray());
        return new DetachLoadBalancersResponse($result->toArray());
    }
}
