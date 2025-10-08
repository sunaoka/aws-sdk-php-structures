<?php

namespace Sunaoka\Aws\Structures\LakeFormation\ListPermissions;

trait ListPermissionsTrait
{
    /**
     * @param ListPermissionsRequest $args
     * @return ListPermissionsResponse
     */
    public function listPermissions(ListPermissionsRequest $args)
    {
        $result = parent::listPermissions($args->toArray());
        return new ListPermissionsResponse($result->toArray());
    }
}
