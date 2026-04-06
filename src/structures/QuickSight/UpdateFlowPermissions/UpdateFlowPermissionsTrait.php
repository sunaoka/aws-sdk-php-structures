<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateFlowPermissions;

trait UpdateFlowPermissionsTrait
{
    /**
     * @param UpdateFlowPermissionsRequest $args
     * @return UpdateFlowPermissionsResponse
     */
    public function updateFlowPermissions(UpdateFlowPermissionsRequest $args)
    {
        $result = parent::updateFlowPermissions($args->toArray());
        return new UpdateFlowPermissionsResponse($result->toArray());
    }
}
