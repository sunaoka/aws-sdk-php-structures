<?php

namespace Sunaoka\Aws\Structures\Lambda\RemoveLayerVersionPermission;

trait RemoveLayerVersionPermissionTrait
{
    /**
     * @param RemoveLayerVersionPermissionRequest $args
     * @return void
     */
    public function removeLayerVersionPermission(RemoveLayerVersionPermissionRequest $args)
    {
        parent::removeLayerVersionPermission($args->toArray());
    }
}
