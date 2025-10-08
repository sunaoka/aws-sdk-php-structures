<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListManagedPoliciesInPermissionSet;

trait ListManagedPoliciesInPermissionSetTrait
{
    /**
     * @param ListManagedPoliciesInPermissionSetRequest $args
     * @return ListManagedPoliciesInPermissionSetResponse
     */
    public function listManagedPoliciesInPermissionSet(ListManagedPoliciesInPermissionSetRequest $args)
    {
        $result = parent::listManagedPoliciesInPermissionSet($args->toArray());
        return new ListManagedPoliciesInPermissionSetResponse($result->toArray());
    }
}
