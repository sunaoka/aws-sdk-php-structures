<?php

namespace Sunaoka\Aws\Structures\Rekognition\PutProjectPolicy;

trait PutProjectPolicyTrait
{
    /**
     * @param PutProjectPolicyRequest $args
     * @return PutProjectPolicyResponse
     */
    public function putProjectPolicy(PutProjectPolicyRequest $args)
    {
        $result = parent::putProjectPolicy($args->toArray());
        return new PutProjectPolicyResponse($result->toArray());
    }
}
