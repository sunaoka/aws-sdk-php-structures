<?php

namespace Sunaoka\Aws\Structures\finspace\GetKxScalingGroup;

trait GetKxScalingGroupTrait
{
    /**
     * @param GetKxScalingGroupRequest $args
     * @return GetKxScalingGroupResponse
     */
    public function getKxScalingGroup(GetKxScalingGroupRequest $args)
    {
        $result = parent::getKxScalingGroup($args->toArray());
        return new GetKxScalingGroupResponse($result->toArray());
    }
}
