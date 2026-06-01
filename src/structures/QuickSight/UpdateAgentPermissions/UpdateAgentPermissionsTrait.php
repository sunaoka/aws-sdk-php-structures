<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAgentPermissions;

trait UpdateAgentPermissionsTrait
{
    /**
     * @param UpdateAgentPermissionsRequest $args
     * @return UpdateAgentPermissionsResponse
     */
    public function updateAgentPermissions(UpdateAgentPermissionsRequest $args)
    {
        $result = parent::updateAgentPermissions($args->toArray());
        return new UpdateAgentPermissionsResponse($result->toArray());
    }
}
