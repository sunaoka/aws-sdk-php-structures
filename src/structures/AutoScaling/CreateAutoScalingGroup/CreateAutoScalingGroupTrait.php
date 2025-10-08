<?php

namespace Sunaoka\Aws\Structures\AutoScaling\CreateAutoScalingGroup;

trait CreateAutoScalingGroupTrait
{
    /**
     * @param CreateAutoScalingGroupRequest $args
     * @return void
     */
    public function createAutoScalingGroup(CreateAutoScalingGroupRequest $args)
    {
        parent::createAutoScalingGroup($args->toArray());
    }
}
