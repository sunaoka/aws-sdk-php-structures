<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkInterfacePermission;

trait CreateNetworkInterfacePermissionTrait
{
    /**
     * @param CreateNetworkInterfacePermissionRequest $args
     * @return CreateNetworkInterfacePermissionResponse
     */
    public function createNetworkInterfacePermission(CreateNetworkInterfacePermissionRequest $args)
    {
        $result = parent::createNetworkInterfacePermission($args->toArray());
        return new CreateNetworkInterfacePermissionResponse($result->toArray());
    }
}
