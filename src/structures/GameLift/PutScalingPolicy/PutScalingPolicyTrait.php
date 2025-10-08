<?php

namespace Sunaoka\Aws\Structures\GameLift\PutScalingPolicy;

trait PutScalingPolicyTrait
{
    /**
     * @param PutScalingPolicyRequest $args
     * @return PutScalingPolicyResponse
     */
    public function putScalingPolicy(PutScalingPolicyRequest $args)
    {
        $result = parent::putScalingPolicy($args->toArray());
        return new PutScalingPolicyResponse($result->toArray());
    }
}
