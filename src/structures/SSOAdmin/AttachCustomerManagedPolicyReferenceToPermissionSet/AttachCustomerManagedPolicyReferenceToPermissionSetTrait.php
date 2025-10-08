<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\AttachCustomerManagedPolicyReferenceToPermissionSet;

trait AttachCustomerManagedPolicyReferenceToPermissionSetTrait
{
    /**
     * @param AttachCustomerManagedPolicyReferenceToPermissionSetRequest $args
     * @return AttachCustomerManagedPolicyReferenceToPermissionSetResponse
     */
    public function attachCustomerManagedPolicyReferenceToPermissionSet(AttachCustomerManagedPolicyReferenceToPermissionSetRequest $args)
    {
        $result = parent::attachCustomerManagedPolicyReferenceToPermissionSet($args->toArray());
        return new AttachCustomerManagedPolicyReferenceToPermissionSetResponse($result->toArray());
    }
}
