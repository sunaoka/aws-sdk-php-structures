<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListCustomerManagedPolicyReferencesInPermissionSet;

trait ListCustomerManagedPolicyReferencesInPermissionSetTrait
{
    /**
     * @param ListCustomerManagedPolicyReferencesInPermissionSetRequest $args
     * @return ListCustomerManagedPolicyReferencesInPermissionSetResponse
     */
    public function listCustomerManagedPolicyReferencesInPermissionSet(
        ListCustomerManagedPolicyReferencesInPermissionSetRequest $args,
    ) {
        $result = parent::listCustomerManagedPolicyReferencesInPermissionSet($args->toArray());
        return new ListCustomerManagedPolicyReferencesInPermissionSetResponse($result->toArray());
    }
}
