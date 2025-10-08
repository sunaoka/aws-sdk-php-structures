<?php

namespace Sunaoka\Aws\Structures\ACMPCA\CreatePermission;

trait CreatePermissionTrait
{
    /**
     * @param CreatePermissionRequest $args
     * @return void
     */
    public function createPermission(CreatePermissionRequest $args)
    {
        parent::createPermission($args->toArray());
    }
}
