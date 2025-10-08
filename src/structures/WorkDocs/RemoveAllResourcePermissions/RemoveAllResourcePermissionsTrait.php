<?php

namespace Sunaoka\Aws\Structures\WorkDocs\RemoveAllResourcePermissions;

trait RemoveAllResourcePermissionsTrait
{
    /**
     * @param RemoveAllResourcePermissionsRequest $args
     * @return void
     */
    public function removeAllResourcePermissions(RemoveAllResourcePermissionsRequest $args)
    {
        parent::removeAllResourcePermissions($args->toArray());
    }
}
