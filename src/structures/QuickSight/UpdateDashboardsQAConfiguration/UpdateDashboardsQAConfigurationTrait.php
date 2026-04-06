<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboardsQAConfiguration;

trait UpdateDashboardsQAConfigurationTrait
{
    /**
     * @param UpdateDashboardsQAConfigurationRequest $args
     * @return UpdateDashboardsQAConfigurationResponse
     */
    public function updateDashboardsQAConfiguration(UpdateDashboardsQAConfigurationRequest $args)
    {
        $result = parent::updateDashboardsQAConfiguration($args->toArray());
        return new UpdateDashboardsQAConfigurationResponse($result->toArray());
    }
}
