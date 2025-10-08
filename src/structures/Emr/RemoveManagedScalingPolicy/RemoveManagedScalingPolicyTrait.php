<?php

namespace Sunaoka\Aws\Structures\Emr\RemoveManagedScalingPolicy;

trait RemoveManagedScalingPolicyTrait
{
    /**
     * @param RemoveManagedScalingPolicyRequest $args
     * @return RemoveManagedScalingPolicyResponse
     */
    public function removeManagedScalingPolicy(RemoveManagedScalingPolicyRequest $args)
    {
        $result = parent::removeManagedScalingPolicy($args->toArray());
        return new RemoveManagedScalingPolicyResponse($result->toArray());
    }
}
