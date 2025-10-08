<?php

namespace Sunaoka\Aws\Structures\Emr\PutManagedScalingPolicy;

trait PutManagedScalingPolicyTrait
{
    /**
     * @param PutManagedScalingPolicyRequest $args
     * @return PutManagedScalingPolicyResponse
     */
    public function putManagedScalingPolicy(PutManagedScalingPolicyRequest $args)
    {
        $result = parent::putManagedScalingPolicy($args->toArray());
        return new PutManagedScalingPolicyResponse($result->toArray());
    }
}
