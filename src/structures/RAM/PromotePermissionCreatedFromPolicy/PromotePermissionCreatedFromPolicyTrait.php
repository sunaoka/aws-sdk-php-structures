<?php

namespace Sunaoka\Aws\Structures\RAM\PromotePermissionCreatedFromPolicy;

trait PromotePermissionCreatedFromPolicyTrait
{
    /**
     * @param PromotePermissionCreatedFromPolicyRequest $args
     * @return PromotePermissionCreatedFromPolicyResponse
     */
    public function promotePermissionCreatedFromPolicy(PromotePermissionCreatedFromPolicyRequest $args)
    {
        $result = parent::promotePermissionCreatedFromPolicy($args->toArray());
        return new PromotePermissionCreatedFromPolicyResponse($result->toArray());
    }
}
