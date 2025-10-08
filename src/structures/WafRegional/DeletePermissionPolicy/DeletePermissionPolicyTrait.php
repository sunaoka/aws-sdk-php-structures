<?php

namespace Sunaoka\Aws\Structures\WafRegional\DeletePermissionPolicy;

trait DeletePermissionPolicyTrait
{
    /**
     * @param DeletePermissionPolicyRequest $args
     * @return DeletePermissionPolicyResponse
     */
    public function deletePermissionPolicy(DeletePermissionPolicyRequest $args)
    {
        $result = parent::deletePermissionPolicy($args->toArray());
        return new DeletePermissionPolicyResponse($result->toArray());
    }
}
