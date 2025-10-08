<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListPermissionSetProvisioningStatus;

trait ListPermissionSetProvisioningStatusTrait
{
    /**
     * @param ListPermissionSetProvisioningStatusRequest $args
     * @return ListPermissionSetProvisioningStatusResponse
     */
    public function listPermissionSetProvisioningStatus(ListPermissionSetProvisioningStatusRequest $args)
    {
        $result = parent::listPermissionSetProvisioningStatus($args->toArray());
        return new ListPermissionSetProvisioningStatusResponse($result->toArray());
    }
}
