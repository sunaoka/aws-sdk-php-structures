<?php

namespace Sunaoka\Aws\Structures\Lambda\AddLayerVersionPermission;

trait AddLayerVersionPermissionTrait
{
    /**
     * @param AddLayerVersionPermissionRequest $args
     * @return AddLayerVersionPermissionResponse
     */
    public function addLayerVersionPermission(AddLayerVersionPermissionRequest $args)
    {
        $result = parent::addLayerVersionPermission($args->toArray());
        return new AddLayerVersionPermissionResponse($result->toArray());
    }
}
