<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteNetworkInterfacePermission;

trait DeleteNetworkInterfacePermissionTrait
{
    /**
     * @param DeleteNetworkInterfacePermissionRequest $args
     * @return DeleteNetworkInterfacePermissionResponse
     */
    public function deleteNetworkInterfacePermission(DeleteNetworkInterfacePermissionRequest $args)
    {
        $result = parent::deleteNetworkInterfacePermission($args->toArray());
        return new DeleteNetworkInterfacePermissionResponse($result->toArray());
    }
}
