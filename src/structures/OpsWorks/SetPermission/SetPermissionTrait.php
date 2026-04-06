<?php

namespace Sunaoka\Aws\Structures\OpsWorks\SetPermission;

trait SetPermissionTrait
{
    /**
     * @param SetPermissionRequest $args
     * @return void
     */
    public function setPermission(SetPermissionRequest $args)
    {
        parent::setPermission($args->toArray());
    }
}
