<?php

namespace Sunaoka\Aws\Structures\finspace\DeleteKxScalingGroup;

trait DeleteKxScalingGroupTrait
{
    /**
     * @param DeleteKxScalingGroupRequest $args
     * @return DeleteKxScalingGroupResponse
     */
    public function deleteKxScalingGroup(DeleteKxScalingGroupRequest $args)
    {
        $result = parent::deleteKxScalingGroup($args->toArray());
        return new DeleteKxScalingGroupResponse($result->toArray());
    }
}
