<?php

namespace Sunaoka\Aws\Structures\BCMDashboards\UpdateDashboard;

trait UpdateDashboardTrait
{
    /**
     * @param UpdateDashboardRequest $args
     * @return UpdateDashboardResponse
     */
    public function updateDashboard(UpdateDashboardRequest $args)
    {
        $result = parent::updateDashboard($args->toArray());
        return new UpdateDashboardResponse($result->toArray());
    }
}
