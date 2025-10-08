<?php

namespace Sunaoka\Aws\Structures\BCMDashboards\DeleteDashboard;

trait DeleteDashboardTrait
{
    /**
     * @param DeleteDashboardRequest $args
     * @return DeleteDashboardResponse
     */
    public function deleteDashboard(DeleteDashboardRequest $args)
    {
        $result = parent::deleteDashboard($args->toArray());
        return new DeleteDashboardResponse($result->toArray());
    }
}
