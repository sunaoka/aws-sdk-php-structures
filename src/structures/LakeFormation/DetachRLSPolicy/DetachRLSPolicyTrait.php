<?php

namespace Sunaoka\Aws\Structures\LakeFormation\DetachRLSPolicy;

trait DetachRLSPolicyTrait
{
    /**
     * @param DetachRLSPolicyRequest $args
     * @return DetachRLSPolicyResponse
     */
    public function detachRLSPolicy(DetachRLSPolicyRequest $args)
    {
        $result = parent::detachRLSPolicy($args->toArray());
        return new DetachRLSPolicyResponse($result->toArray());
    }
}
