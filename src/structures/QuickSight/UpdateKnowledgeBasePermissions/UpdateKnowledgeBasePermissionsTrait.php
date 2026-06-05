<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateKnowledgeBasePermissions;

trait UpdateKnowledgeBasePermissionsTrait
{
    /**
     * @param UpdateKnowledgeBasePermissionsRequest $args
     * @return UpdateKnowledgeBasePermissionsResponse
     */
    public function updateKnowledgeBasePermissions(UpdateKnowledgeBasePermissionsRequest $args)
    {
        $result = parent::updateKnowledgeBasePermissions($args->toArray());
        return new UpdateKnowledgeBasePermissionsResponse($result->toArray());
    }
}
