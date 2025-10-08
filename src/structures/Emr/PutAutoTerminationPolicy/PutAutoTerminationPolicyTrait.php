<?php

namespace Sunaoka\Aws\Structures\Emr\PutAutoTerminationPolicy;

trait PutAutoTerminationPolicyTrait
{
    /**
     * @param PutAutoTerminationPolicyRequest $args
     * @return PutAutoTerminationPolicyResponse
     */
    public function putAutoTerminationPolicy(PutAutoTerminationPolicyRequest $args)
    {
        $result = parent::putAutoTerminationPolicy($args->toArray());
        return new PutAutoTerminationPolicyResponse($result->toArray());
    }
}
