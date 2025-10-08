<?php

namespace Sunaoka\Aws\Structures\Appstream\UpdateImagePermissions;

trait UpdateImagePermissionsTrait
{
    /**
     * @param UpdateImagePermissionsRequest $args
     * @return UpdateImagePermissionsResponse
     */
    public function updateImagePermissions(UpdateImagePermissionsRequest $args)
    {
        $result = parent::updateImagePermissions($args->toArray());
        return new UpdateImagePermissionsResponse($result->toArray());
    }
}
