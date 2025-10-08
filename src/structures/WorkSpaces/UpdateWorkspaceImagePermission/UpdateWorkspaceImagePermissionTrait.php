<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\UpdateWorkspaceImagePermission;

trait UpdateWorkspaceImagePermissionTrait
{
    /**
     * @param UpdateWorkspaceImagePermissionRequest $args
     * @return UpdateWorkspaceImagePermissionResponse
     */
    public function updateWorkspaceImagePermission(UpdateWorkspaceImagePermissionRequest $args)
    {
        $result = parent::updateWorkspaceImagePermission($args->toArray());
        return new UpdateWorkspaceImagePermissionResponse($result->toArray());
    }
}
