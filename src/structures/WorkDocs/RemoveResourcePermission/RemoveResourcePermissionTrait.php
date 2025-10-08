<?php

namespace Sunaoka\Aws\Structures\WorkDocs\RemoveResourcePermission;

trait RemoveResourcePermissionTrait
{
    /**
     * @param RemoveResourcePermissionRequest $args
     * @return void
     */
    public function removeResourcePermission(RemoveResourcePermissionRequest $args)
    {
        parent::removeResourcePermission($args->toArray());
    }
}
