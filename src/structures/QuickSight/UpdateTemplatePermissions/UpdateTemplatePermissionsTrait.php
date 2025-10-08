<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplatePermissions;

trait UpdateTemplatePermissionsTrait
{
    /**
     * @param UpdateTemplatePermissionsRequest $args
     * @return UpdateTemplatePermissionsResponse
     */
    public function updateTemplatePermissions(UpdateTemplatePermissionsRequest $args)
    {
        $result = parent::updateTemplatePermissions($args->toArray());
        return new UpdateTemplatePermissionsResponse($result->toArray());
    }
}
