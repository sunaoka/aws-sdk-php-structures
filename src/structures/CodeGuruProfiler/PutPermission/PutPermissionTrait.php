<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\PutPermission;

trait PutPermissionTrait
{
    /**
     * @param PutPermissionRequest $args
     * @return PutPermissionResponse
     */
    public function putPermission(PutPermissionRequest $args)
    {
        $result = parent::putPermission($args->toArray());
        return new PutPermissionResponse($result->toArray());
    }
}
