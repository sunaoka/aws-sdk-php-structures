<?php

namespace Sunaoka\Aws\Structures\ApplicationAutoScaling\DeleteScalingPolicy;

trait DeleteScalingPolicyTrait
{
    /**
     * @param DeleteScalingPolicyRequest $args
     * @return DeleteScalingPolicyResponse
     */
    public function deleteScalingPolicy(DeleteScalingPolicyRequest $args)
    {
        $result = parent::deleteScalingPolicy($args->toArray());
        return new DeleteScalingPolicyResponse($result->toArray());
    }
}
