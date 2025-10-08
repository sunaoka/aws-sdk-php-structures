<?php

namespace Sunaoka\Aws\Structures\Sqs\RemovePermission;

trait RemovePermissionTrait
{
    /**
     * @param RemovePermissionRequest $args
     * @return void
     */
    public function removePermission(RemovePermissionRequest $args)
    {
        parent::removePermission($args->toArray());
    }
}
