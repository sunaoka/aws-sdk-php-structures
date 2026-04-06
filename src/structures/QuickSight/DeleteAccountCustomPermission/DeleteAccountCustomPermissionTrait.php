<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteAccountCustomPermission;

trait DeleteAccountCustomPermissionTrait
{
    /**
     * @param DeleteAccountCustomPermissionRequest $args
     * @return DeleteAccountCustomPermissionResponse
     */
    public function deleteAccountCustomPermission(DeleteAccountCustomPermissionRequest $args)
    {
        $result = parent::deleteAccountCustomPermission($args->toArray());
        return new DeleteAccountCustomPermissionResponse($result->toArray());
    }
}
