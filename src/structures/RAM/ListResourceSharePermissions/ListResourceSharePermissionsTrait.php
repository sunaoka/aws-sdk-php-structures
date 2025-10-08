<?php

namespace Sunaoka\Aws\Structures\RAM\ListResourceSharePermissions;

trait ListResourceSharePermissionsTrait
{
    /**
     * @param ListResourceSharePermissionsRequest $args
     * @return ListResourceSharePermissionsResponse
     */
    public function listResourceSharePermissions(ListResourceSharePermissionsRequest $args)
    {
        $result = parent::listResourceSharePermissions($args->toArray());
        return new ListResourceSharePermissionsResponse($result->toArray());
    }
}
