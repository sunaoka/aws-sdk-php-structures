<?php

namespace Sunaoka\Aws\Structures\Appstream\DeleteImagePermissions;

trait DeleteImagePermissionsTrait
{
    /**
     * @param DeleteImagePermissionsRequest $args
     * @return DeleteImagePermissionsResponse
     */
    public function deleteImagePermissions(DeleteImagePermissionsRequest $args)
    {
        $result = parent::deleteImagePermissions($args->toArray());
        return new DeleteImagePermissionsResponse($result->toArray());
    }
}
