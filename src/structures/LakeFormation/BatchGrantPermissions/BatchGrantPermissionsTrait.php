<?php

namespace Sunaoka\Aws\Structures\LakeFormation\BatchGrantPermissions;

trait BatchGrantPermissionsTrait
{
    /**
     * @param BatchGrantPermissionsRequest $args
     * @return BatchGrantPermissionsResponse
     */
    public function batchGrantPermissions(BatchGrantPermissionsRequest $args)
    {
        $result = parent::batchGrantPermissions($args->toArray());
        return new BatchGrantPermissionsResponse($result->toArray());
    }
}
