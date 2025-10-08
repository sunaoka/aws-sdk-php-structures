<?php

namespace Sunaoka\Aws\Structures\CloudTrail\GetDashboard;

trait GetDashboardTrait
{
    /**
     * @param GetDashboardRequest $args
     * @return GetDashboardResponse
     */
    public function getDashboard(GetDashboardRequest $args)
    {
        $result = parent::getDashboard($args->toArray());
        return new GetDashboardResponse($result->toArray());
    }
}
