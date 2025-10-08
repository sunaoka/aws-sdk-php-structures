<?php

namespace Sunaoka\Aws\Structures\RAM\DeletePermissionVersion;

trait DeletePermissionVersionTrait
{
    /**
     * @param DeletePermissionVersionRequest $args
     * @return DeletePermissionVersionResponse
     */
    public function deletePermissionVersion(DeletePermissionVersionRequest $args)
    {
        $result = parent::deletePermissionVersion($args->toArray());
        return new DeletePermissionVersionResponse($result->toArray());
    }
}
