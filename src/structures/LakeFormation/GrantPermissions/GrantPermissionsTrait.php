<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GrantPermissions;

trait GrantPermissionsTrait
{
    /**
     * @param GrantPermissionsRequest $args
     * @return GrantPermissionsResponse
     */
    public function grantPermissions(GrantPermissionsRequest $args)
    {
        $result = parent::grantPermissions($args->toArray());
        return new GrantPermissionsResponse($result->toArray());
    }
}
