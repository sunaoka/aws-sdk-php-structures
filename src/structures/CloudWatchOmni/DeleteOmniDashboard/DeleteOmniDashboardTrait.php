<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\DeleteOmniDashboard;

trait DeleteOmniDashboardTrait
{
    /**
     * @param DeleteOmniDashboardRequest $args
     * @return DeleteOmniDashboardResponse
     */
    public function deleteOmniDashboard(DeleteOmniDashboardRequest $args)
    {
        $result = parent::deleteOmniDashboard($args->toArray());
        return new DeleteOmniDashboardResponse($result->toArray());
    }
}
