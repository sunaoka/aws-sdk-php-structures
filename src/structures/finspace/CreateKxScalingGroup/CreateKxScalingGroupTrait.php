<?php

namespace Sunaoka\Aws\Structures\finspace\CreateKxScalingGroup;

trait CreateKxScalingGroupTrait
{
    /**
     * @param CreateKxScalingGroupRequest $args
     * @return CreateKxScalingGroupResponse
     */
    public function createKxScalingGroup(CreateKxScalingGroupRequest $args)
    {
        $result = parent::createKxScalingGroup($args->toArray());
        return new CreateKxScalingGroupResponse($result->toArray());
    }
}
