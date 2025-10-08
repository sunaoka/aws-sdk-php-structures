<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DetachCustomerManagedPolicyReferenceFromPermissionSet;

trait DetachCustomerManagedPolicyReferenceFromPermissionSetTrait
{
    /**
     * @param DetachCustomerManagedPolicyReferenceFromPermissionSetRequest $args
     * @return DetachCustomerManagedPolicyReferenceFromPermissionSetResponse
     */
    public function detachCustomerManagedPolicyReferenceFromPermissionSet(
        DetachCustomerManagedPolicyReferenceFromPermissionSetRequest $args,
    ) {
        $result = parent::detachCustomerManagedPolicyReferenceFromPermissionSet($args->toArray());
        return new DetachCustomerManagedPolicyReferenceFromPermissionSetResponse($result->toArray());
    }
}
