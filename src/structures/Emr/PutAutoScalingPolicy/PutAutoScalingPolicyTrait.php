<?php

namespace Sunaoka\Aws\Structures\Emr\PutAutoScalingPolicy;

trait PutAutoScalingPolicyTrait
{
    /**
     * @param PutAutoScalingPolicyRequest $args
     * @return PutAutoScalingPolicyResponse
     */
    public function putAutoScalingPolicy(PutAutoScalingPolicyRequest $args)
    {
        $result = parent::putAutoScalingPolicy($args->toArray());
        return new PutAutoScalingPolicyResponse($result->toArray());
    }
}
