<?php

namespace Sunaoka\Aws\Structures\LakeFormation\BatchRevokePermissions;

trait BatchRevokePermissionsTrait
{
    /**
     * @param BatchRevokePermissionsRequest $args
     * @return BatchRevokePermissionsResponse
     */
    public function batchRevokePermissions(BatchRevokePermissionsRequest $args)
    {
        $result = parent::batchRevokePermissions($args->toArray());
        return new BatchRevokePermissionsResponse($result->toArray());
    }
}
