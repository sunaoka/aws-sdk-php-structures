<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysisPermissions;

trait UpdateAnalysisPermissionsTrait
{
    /**
     * @param UpdateAnalysisPermissionsRequest $args
     * @return UpdateAnalysisPermissionsResponse
     */
    public function updateAnalysisPermissions(UpdateAnalysisPermissionsRequest $args)
    {
        $result = parent::updateAnalysisPermissions($args->toArray());
        return new UpdateAnalysisPermissionsResponse($result->toArray());
    }
}
