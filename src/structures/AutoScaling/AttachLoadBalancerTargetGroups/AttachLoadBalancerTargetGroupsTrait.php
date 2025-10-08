<?php

namespace Sunaoka\Aws\Structures\AutoScaling\AttachLoadBalancerTargetGroups;

trait AttachLoadBalancerTargetGroupsTrait
{
    /**
     * @param AttachLoadBalancerTargetGroupsRequest $args
     * @return AttachLoadBalancerTargetGroupsResponse
     */
    public function attachLoadBalancerTargetGroups(AttachLoadBalancerTargetGroupsRequest $args)
    {
        $result = parent::attachLoadBalancerTargetGroups($args->toArray());
        return new AttachLoadBalancerTargetGroupsResponse($result->toArray());
    }
}
