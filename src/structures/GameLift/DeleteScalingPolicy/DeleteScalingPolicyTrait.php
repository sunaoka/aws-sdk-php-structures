<?php

namespace Sunaoka\Aws\Structures\GameLift\DeleteScalingPolicy;

trait DeleteScalingPolicyTrait
{
    /**
     * @param DeleteScalingPolicyRequest $args
     * @return void
     */
    public function deleteScalingPolicy(DeleteScalingPolicyRequest $args)
    {
        parent::deleteScalingPolicy($args->toArray());
    }
}
