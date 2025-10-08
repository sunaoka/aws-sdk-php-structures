<?php

namespace Sunaoka\Aws\Structures\Emr\RemoveAutoScalingPolicy;

trait RemoveAutoScalingPolicyTrait
{
    /**
     * @param RemoveAutoScalingPolicyRequest $args
     * @return RemoveAutoScalingPolicyResponse
     */
    public function removeAutoScalingPolicy(RemoveAutoScalingPolicyRequest $args)
    {
        $result = parent::removeAutoScalingPolicy($args->toArray());
        return new RemoveAutoScalingPolicyResponse($result->toArray());
    }
}
