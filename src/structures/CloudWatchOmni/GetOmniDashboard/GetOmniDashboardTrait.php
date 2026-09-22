<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\GetOmniDashboard;

trait GetOmniDashboardTrait
{
    /**
     * @param GetOmniDashboardRequest $args
     * @return GetOmniDashboardResponse
     */
    public function getOmniDashboard(GetOmniDashboardRequest $args)
    {
        $result = parent::getOmniDashboard($args->toArray());
        return new GetOmniDashboardResponse($result->toArray());
    }
}
