<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTopicPermissions;

trait UpdateTopicPermissionsTrait
{
    /**
     * @param UpdateTopicPermissionsRequest $args
     * @return UpdateTopicPermissionsResponse
     */
    public function updateTopicPermissions(UpdateTopicPermissionsRequest $args)
    {
        $result = parent::updateTopicPermissions($args->toArray());
        return new UpdateTopicPermissionsResponse($result->toArray());
    }
}
