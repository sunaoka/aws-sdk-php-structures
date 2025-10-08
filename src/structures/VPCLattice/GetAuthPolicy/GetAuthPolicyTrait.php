<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetAuthPolicy;

trait GetAuthPolicyTrait
{
    /**
     * @param GetAuthPolicyRequest $args
     * @return GetAuthPolicyResponse
     */
    public function getAuthPolicy(GetAuthPolicyRequest $args)
    {
        $result = parent::getAuthPolicy($args->toArray());
        return new GetAuthPolicyResponse($result->toArray());
    }
}
