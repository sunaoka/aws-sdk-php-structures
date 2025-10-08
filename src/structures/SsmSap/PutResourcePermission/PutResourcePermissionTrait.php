<?php

namespace Sunaoka\Aws\Structures\SsmSap\PutResourcePermission;

trait PutResourcePermissionTrait
{
    /**
     * @param PutResourcePermissionRequest $args
     * @return PutResourcePermissionResponse
     */
    public function putResourcePermission(PutResourcePermissionRequest $args)
    {
        $result = parent::putResourcePermission($args->toArray());
        return new PutResourcePermissionResponse($result->toArray());
    }
}
