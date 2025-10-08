<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DeleteAutoScalingGroup;

trait DeleteAutoScalingGroupTrait
{
    /**
     * @param DeleteAutoScalingGroupRequest $args
     * @return void
     */
    public function deleteAutoScalingGroup(DeleteAutoScalingGroupRequest $args)
    {
        parent::deleteAutoScalingGroup($args->toArray());
    }
}
