<?php

namespace Sunaoka\Aws\Structures\Emr\GetManagedScalingPolicy;

trait GetManagedScalingPolicyTrait
{
    /**
     * @param GetManagedScalingPolicyRequest $args
     * @return GetManagedScalingPolicyResponse
     */
    public function getManagedScalingPolicy(GetManagedScalingPolicyRequest $args)
    {
        $result = parent::getManagedScalingPolicy($args->toArray());
        return new GetManagedScalingPolicyResponse($result->toArray());
    }
}
