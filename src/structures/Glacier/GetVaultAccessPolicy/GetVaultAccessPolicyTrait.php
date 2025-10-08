<?php

namespace Sunaoka\Aws\Structures\Glacier\GetVaultAccessPolicy;

trait GetVaultAccessPolicyTrait
{
    /**
     * @param GetVaultAccessPolicyRequest $args
     * @return GetVaultAccessPolicyResponse
     */
    public function getVaultAccessPolicy(GetVaultAccessPolicyRequest $args)
    {
        $result = parent::getVaultAccessPolicy($args->toArray());
        return new GetVaultAccessPolicyResponse($result->toArray());
    }
}
