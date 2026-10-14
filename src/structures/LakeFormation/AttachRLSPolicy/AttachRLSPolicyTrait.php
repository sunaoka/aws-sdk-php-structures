<?php

namespace Sunaoka\Aws\Structures\LakeFormation\AttachRLSPolicy;

trait AttachRLSPolicyTrait
{
    /**
     * @param AttachRLSPolicyRequest $args
     * @return AttachRLSPolicyResponse
     */
    public function attachRLSPolicy(AttachRLSPolicyRequest $args)
    {
        $result = parent::attachRLSPolicy($args->toArray());
        return new AttachRLSPolicyResponse($result->toArray());
    }
}
