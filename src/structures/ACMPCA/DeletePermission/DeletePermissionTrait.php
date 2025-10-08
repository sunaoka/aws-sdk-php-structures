<?php

namespace Sunaoka\Aws\Structures\ACMPCA\DeletePermission;

trait DeletePermissionTrait
{
    /**
     * @param DeletePermissionRequest $args
     * @return void
     */
    public function deletePermission(DeletePermissionRequest $args)
    {
        parent::deletePermission($args->toArray());
    }
}
