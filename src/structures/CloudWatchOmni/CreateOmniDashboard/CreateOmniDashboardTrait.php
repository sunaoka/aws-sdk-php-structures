<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\CreateOmniDashboard;

trait CreateOmniDashboardTrait
{
    /**
     * @param CreateOmniDashboardRequest $args
     * @return CreateOmniDashboardResponse
     */
    public function createOmniDashboard(CreateOmniDashboardRequest $args)
    {
        $result = parent::createOmniDashboard($args->toArray());
        return new CreateOmniDashboardResponse($result->toArray());
    }
}
