<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateActionConnectorPermissions;

trait UpdateActionConnectorPermissionsTrait
{
    /**
     * @param UpdateActionConnectorPermissionsRequest $args
     * @return UpdateActionConnectorPermissionsResponse
     */
    public function updateActionConnectorPermissions(UpdateActionConnectorPermissionsRequest $args)
    {
        $result = parent::updateActionConnectorPermissions($args->toArray());
        return new UpdateActionConnectorPermissionsResponse($result->toArray());
    }
}
