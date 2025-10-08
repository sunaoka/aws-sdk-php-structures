<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListAccountsForProvisionedPermissionSet;

trait ListAccountsForProvisionedPermissionSetTrait
{
    /**
     * @param ListAccountsForProvisionedPermissionSetRequest $args
     * @return ListAccountsForProvisionedPermissionSetResponse
     */
    public function listAccountsForProvisionedPermissionSet(ListAccountsForProvisionedPermissionSetRequest $args)
    {
        $result = parent::listAccountsForProvisionedPermissionSet($args->toArray());
        return new ListAccountsForProvisionedPermissionSetResponse($result->toArray());
    }
}
