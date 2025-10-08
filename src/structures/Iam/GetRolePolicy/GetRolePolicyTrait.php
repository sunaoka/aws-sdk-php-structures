<?php

namespace Sunaoka\Aws\Structures\Iam\GetRolePolicy;

trait GetRolePolicyTrait
{
    /**
     * @param GetRolePolicyRequest $args
     * @return GetRolePolicyResponse
     */
    public function getRolePolicy(GetRolePolicyRequest $args)
    {
        $result = parent::getRolePolicy($args->toArray());
        return new GetRolePolicyResponse($result->toArray());
    }
}
