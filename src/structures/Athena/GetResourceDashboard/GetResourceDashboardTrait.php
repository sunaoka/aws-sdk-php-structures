<?php

namespace Sunaoka\Aws\Structures\Athena\GetResourceDashboard;

trait GetResourceDashboardTrait
{
    /**
     * @param GetResourceDashboardRequest $args
     * @return GetResourceDashboardResponse
     */
    public function getResourceDashboard(GetResourceDashboardRequest $args)
    {
        $result = parent::getResourceDashboard($args->toArray());
        return new GetResourceDashboardResponse($result->toArray());
    }
}
