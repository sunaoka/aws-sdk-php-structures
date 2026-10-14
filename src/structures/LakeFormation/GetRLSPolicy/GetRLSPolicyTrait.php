<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetRLSPolicy;

trait GetRLSPolicyTrait
{
    /**
     * @param GetRLSPolicyRequest $args
     * @return GetRLSPolicyResponse
     */
    public function getRLSPolicy(GetRLSPolicyRequest $args)
    {
        $result = parent::getRLSPolicy($args->toArray());
        return new GetRLSPolicyResponse($result->toArray());
    }
}
