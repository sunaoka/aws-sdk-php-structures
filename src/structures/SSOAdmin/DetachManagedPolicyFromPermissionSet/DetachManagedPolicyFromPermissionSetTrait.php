<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DetachManagedPolicyFromPermissionSet;

trait DetachManagedPolicyFromPermissionSetTrait
{
    /**
     * @param DetachManagedPolicyFromPermissionSetRequest $args
     * @return DetachManagedPolicyFromPermissionSetResponse
     */
    public function detachManagedPolicyFromPermissionSet(DetachManagedPolicyFromPermissionSetRequest $args)
    {
        $result = parent::detachManagedPolicyFromPermissionSet($args->toArray());
        return new DetachManagedPolicyFromPermissionSetResponse($result->toArray());
    }
}
