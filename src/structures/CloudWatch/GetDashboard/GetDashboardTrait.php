<?php

namespace Sunaoka\Aws\Structures\CloudWatch\GetDashboard;

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
