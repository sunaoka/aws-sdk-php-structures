<?php

namespace Sunaoka\Aws\Structures\Connect\ListSecurityProfilePermissions;

trait ListSecurityProfilePermissionsTrait
{
    /**
     * @param ListSecurityProfilePermissionsRequest $args
     * @return ListSecurityProfilePermissionsResponse
     */
    public function listSecurityProfilePermissions(ListSecurityProfilePermissionsRequest $args)
    {
        $result = parent::listSecurityProfilePermissions($args->toArray());
        return new ListSecurityProfilePermissionsResponse($result->toArray());
    }
}
