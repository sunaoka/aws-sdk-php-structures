<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ModifySelfservicePermissions;

trait ModifySelfservicePermissionsTrait
{
    /**
     * @param ModifySelfservicePermissionsRequest $args
     * @return ModifySelfservicePermissionsResponse
     */
    public function modifySelfservicePermissions(ModifySelfservicePermissionsRequest $args)
    {
        $result = parent::modifySelfservicePermissions($args->toArray());
        return new ModifySelfservicePermissionsResponse($result->toArray());
    }
}
