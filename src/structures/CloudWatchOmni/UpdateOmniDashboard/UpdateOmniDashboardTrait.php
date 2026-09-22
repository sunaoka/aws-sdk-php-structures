<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\UpdateOmniDashboard;

trait UpdateOmniDashboardTrait
{
    /**
     * @param UpdateOmniDashboardRequest $args
     * @return UpdateOmniDashboardResponse
     */
    public function updateOmniDashboard(UpdateOmniDashboardRequest $args)
    {
        $result = parent::updateOmniDashboard($args->toArray());
        return new UpdateOmniDashboardResponse($result->toArray());
    }
}
