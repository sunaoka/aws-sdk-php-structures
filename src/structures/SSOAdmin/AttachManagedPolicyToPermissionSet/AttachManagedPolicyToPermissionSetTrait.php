<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\AttachManagedPolicyToPermissionSet;

trait AttachManagedPolicyToPermissionSetTrait
{
    /**
     * @param AttachManagedPolicyToPermissionSetRequest $args
     * @return AttachManagedPolicyToPermissionSetResponse
     */
    public function attachManagedPolicyToPermissionSet(AttachManagedPolicyToPermissionSetRequest $args)
    {
        $result = parent::attachManagedPolicyToPermissionSet($args->toArray());
        return new AttachManagedPolicyToPermissionSetResponse($result->toArray());
    }
}
