<?php

namespace Sunaoka\Aws\Structures\CloudTrail\StartDashboardRefresh;

trait StartDashboardRefreshTrait
{
    /**
     * @param StartDashboardRefreshRequest $args
     * @return StartDashboardRefreshResponse
     */
    public function startDashboardRefresh(StartDashboardRefreshRequest $args)
    {
        $result = parent::startDashboardRefresh($args->toArray());
        return new StartDashboardRefreshResponse($result->toArray());
    }
}
