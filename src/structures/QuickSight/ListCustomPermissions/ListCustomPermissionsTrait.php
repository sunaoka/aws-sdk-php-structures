<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListCustomPermissions;

trait ListCustomPermissionsTrait
{
    /**
     * @param ListCustomPermissionsRequest $args
     * @return ListCustomPermissionsResponse
     */
    public function listCustomPermissions(ListCustomPermissionsRequest $args)
    {
        $result = parent::listCustomPermissions($args->toArray());
        return new ListCustomPermissionsResponse($result->toArray());
    }
}
