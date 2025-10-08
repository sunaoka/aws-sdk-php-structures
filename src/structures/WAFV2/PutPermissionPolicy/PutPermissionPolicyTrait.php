<?php

namespace Sunaoka\Aws\Structures\WAFV2\PutPermissionPolicy;

trait PutPermissionPolicyTrait
{
    /**
     * @param PutPermissionPolicyRequest $args
     * @return PutPermissionPolicyResponse
     */
    public function putPermissionPolicy(PutPermissionPolicyRequest $args)
    {
        $result = parent::putPermissionPolicy($args->toArray());
        return new PutPermissionPolicyResponse($result->toArray());
    }
}
