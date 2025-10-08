<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DetachLoadBalancerTargetGroups;

trait DetachLoadBalancerTargetGroupsTrait
{
    /**
     * @param DetachLoadBalancerTargetGroupsRequest $args
     * @return DetachLoadBalancerTargetGroupsResponse
     */
    public function detachLoadBalancerTargetGroups(DetachLoadBalancerTargetGroupsRequest $args)
    {
        $result = parent::detachLoadBalancerTargetGroups($args->toArray());
        return new DetachLoadBalancerTargetGroupsResponse($result->toArray());
    }
}
