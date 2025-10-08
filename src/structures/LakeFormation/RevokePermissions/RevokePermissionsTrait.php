<?php

namespace Sunaoka\Aws\Structures\LakeFormation\RevokePermissions;

trait RevokePermissionsTrait
{
    /**
     * @param RevokePermissionsRequest $args
     * @return RevokePermissionsResponse
     */
    public function revokePermissions(RevokePermissionsRequest $args)
    {
        $result = parent::revokePermissions($args->toArray());
        return new RevokePermissionsResponse($result->toArray());
    }
}
