<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListPermissionSetsProvisionedToAccount;

trait ListPermissionSetsProvisionedToAccountTrait
{
    /**
     * @param ListPermissionSetsProvisionedToAccountRequest $args
     * @return ListPermissionSetsProvisionedToAccountResponse
     */
    public function listPermissionSetsProvisionedToAccount(ListPermissionSetsProvisionedToAccountRequest $args)
    {
        $result = parent::listPermissionSetsProvisionedToAccount($args->toArray());
        return new ListPermissionSetsProvisionedToAccountResponse($result->toArray());
    }
}
