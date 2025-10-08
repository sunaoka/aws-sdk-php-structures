<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateDashboard;

trait CreateDashboardTrait
{
    /**
     * @param CreateDashboardRequest $args
     * @return CreateDashboardResponse
     */
    public function createDashboard(CreateDashboardRequest $args)
    {
        $result = parent::createDashboard($args->toArray());
        return new CreateDashboardResponse($result->toArray());
    }
}
