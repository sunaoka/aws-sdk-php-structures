<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpcEndpointServicePermissions;

trait ModifyVpcEndpointServicePermissionsTrait
{
    /**
     * @param ModifyVpcEndpointServicePermissionsRequest $args
     * @return ModifyVpcEndpointServicePermissionsResponse
     */
    public function modifyVpcEndpointServicePermissions(ModifyVpcEndpointServicePermissionsRequest $args)
    {
        $result = parent::modifyVpcEndpointServicePermissions($args->toArray());
        return new ModifyVpcEndpointServicePermissionsResponse($result->toArray());
    }
}
