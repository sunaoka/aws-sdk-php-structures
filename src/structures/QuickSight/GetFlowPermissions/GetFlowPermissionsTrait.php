<?php

namespace Sunaoka\Aws\Structures\QuickSight\GetFlowPermissions;

trait GetFlowPermissionsTrait
{
    /**
     * @param GetFlowPermissionsRequest $args
     * @return GetFlowPermissionsResponse
     */
    public function getFlowPermissions(GetFlowPermissionsRequest $args)
    {
        $result = parent::getFlowPermissions($args->toArray());
        return new GetFlowPermissionsResponse($result->toArray());
    }
}
