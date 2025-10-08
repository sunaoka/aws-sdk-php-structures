<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboardPublishedVersion;

trait UpdateDashboardPublishedVersionTrait
{
    /**
     * @param UpdateDashboardPublishedVersionRequest $args
     * @return UpdateDashboardPublishedVersionResponse
     */
    public function updateDashboardPublishedVersion(UpdateDashboardPublishedVersionRequest $args)
    {
        $result = parent::updateDashboardPublishedVersion($args->toArray());
        return new UpdateDashboardPublishedVersionResponse($result->toArray());
    }
}
