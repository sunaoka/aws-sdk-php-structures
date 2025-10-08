<?php

namespace Sunaoka\Aws\Structures\AutoScaling\UpdateAutoScalingGroup;

trait UpdateAutoScalingGroupTrait
{
    /**
     * @param UpdateAutoScalingGroupRequest $args
     * @return void
     */
    public function updateAutoScalingGroup(UpdateAutoScalingGroupRequest $args)
    {
        parent::updateAutoScalingGroup($args->toArray());
    }
}
