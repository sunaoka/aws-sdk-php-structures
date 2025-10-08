<?php

namespace Sunaoka\Aws\Structures\Iam\SimulatePrincipalPolicy;

trait SimulatePrincipalPolicyTrait
{
    /**
     * @param SimulatePrincipalPolicyRequest $args
     * @return SimulatePrincipalPolicyResponse
     */
    public function simulatePrincipalPolicy(SimulatePrincipalPolicyRequest $args)
    {
        $result = parent::simulatePrincipalPolicy($args->toArray());
        return new SimulatePrincipalPolicyResponse($result->toArray());
    }
}
