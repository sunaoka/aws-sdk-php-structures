<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListAccountPermissions;

trait ListAccountPermissionsTrait
{
    /**
     * @param ListAccountPermissionsRequest $args
     * @return ListAccountPermissionsResponse
     */
    public function listAccountPermissions(ListAccountPermissionsRequest $args)
    {
        $result = parent::listAccountPermissions($args->toArray());
        return new ListAccountPermissionsResponse($result->toArray());
    }
}
