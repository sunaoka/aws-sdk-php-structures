<?php

namespace Sunaoka\Aws\Structures\LakeFormation\UpdateRLSPolicy;

trait UpdateRLSPolicyTrait
{
    /**
     * @param UpdateRLSPolicyRequest $args
     * @return UpdateRLSPolicyResponse
     */
    public function updateRLSPolicy(UpdateRLSPolicyRequest $args)
    {
        $result = parent::updateRLSPolicy($args->toArray());
        return new UpdateRLSPolicyResponse($result->toArray());
    }
}
