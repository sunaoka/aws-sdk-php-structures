<?php

namespace Sunaoka\Aws\Structures\QApps\UpdateQAppPermissions;

trait UpdateQAppPermissionsTrait
{
    /**
     * @param UpdateQAppPermissionsRequest $args
     * @return UpdateQAppPermissionsResponse
     */
    public function updateQAppPermissions(UpdateQAppPermissionsRequest $args)
    {
        $result = parent::updateQAppPermissions($args->toArray());
        return new UpdateQAppPermissionsResponse($result->toArray());
    }
}
