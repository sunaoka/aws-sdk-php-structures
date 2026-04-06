<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteCustomPermissions;

trait DeleteCustomPermissionsTrait
{
    /**
     * @param DeleteCustomPermissionsRequest $args
     * @return DeleteCustomPermissionsResponse
     */
    public function deleteCustomPermissions(DeleteCustomPermissionsRequest $args)
    {
        $result = parent::deleteCustomPermissions($args->toArray());
        return new DeleteCustomPermissionsResponse($result->toArray());
    }
}
