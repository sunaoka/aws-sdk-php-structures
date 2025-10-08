<?php

namespace Sunaoka\Aws\Structures\WorkDocs\AddResourcePermissions;

trait AddResourcePermissionsTrait
{
    /**
     * @param AddResourcePermissionsRequest $args
     * @return AddResourcePermissionsResponse
     */
    public function addResourcePermissions(AddResourcePermissionsRequest $args)
    {
        $result = parent::addResourcePermissions($args->toArray());
        return new AddResourcePermissionsResponse($result->toArray());
    }
}
