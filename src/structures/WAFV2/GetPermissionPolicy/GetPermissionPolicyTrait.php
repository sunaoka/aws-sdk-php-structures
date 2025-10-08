<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetPermissionPolicy;

trait GetPermissionPolicyTrait
{
    /**
     * @param GetPermissionPolicyRequest $args
     * @return GetPermissionPolicyResponse
     */
    public function getPermissionPolicy(GetPermissionPolicyRequest $args)
    {
        $result = parent::getPermissionPolicy($args->toArray());
        return new GetPermissionPolicyResponse($result->toArray());
    }
}
