<?php

namespace Sunaoka\Aws\Structures\EventBridge\PutPermission;

trait PutPermissionTrait
{
    /**
     * @param PutPermissionRequest $args
     * @return void
     */
    public function putPermission(PutPermissionRequest $args)
    {
        parent::putPermission($args->toArray());
    }
}
