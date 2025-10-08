<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\RemovePermission;

trait RemovePermissionTrait
{
    /**
     * @param RemovePermissionRequest $args
     * @return RemovePermissionResponse
     */
    public function removePermission(RemovePermissionRequest $args)
    {
        $result = parent::removePermission($args->toArray());
        return new RemovePermissionResponse($result->toArray());
    }
}
