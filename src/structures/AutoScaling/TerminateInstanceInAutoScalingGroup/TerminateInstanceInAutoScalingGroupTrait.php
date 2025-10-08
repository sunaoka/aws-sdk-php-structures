<?php

namespace Sunaoka\Aws\Structures\AutoScaling\TerminateInstanceInAutoScalingGroup;

trait TerminateInstanceInAutoScalingGroupTrait
{
    /**
     * @param TerminateInstanceInAutoScalingGroupRequest $args
     * @return TerminateInstanceInAutoScalingGroupResponse
     */
    public function terminateInstanceInAutoScalingGroup(TerminateInstanceInAutoScalingGroupRequest $args)
    {
        $result = parent::terminateInstanceInAutoScalingGroup($args->toArray());
        return new TerminateInstanceInAutoScalingGroupResponse($result->toArray());
    }
}
