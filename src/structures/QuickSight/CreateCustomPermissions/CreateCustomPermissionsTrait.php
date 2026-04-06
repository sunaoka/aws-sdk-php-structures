<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateCustomPermissions;

trait CreateCustomPermissionsTrait
{
    /**
     * @param CreateCustomPermissionsRequest $args
     * @return CreateCustomPermissionsResponse
     */
    public function createCustomPermissions(CreateCustomPermissionsRequest $args)
    {
        $result = parent::createCustomPermissions($args->toArray());
        return new CreateCustomPermissionsResponse($result->toArray());
    }
}
