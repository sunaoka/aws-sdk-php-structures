<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardsQAConfiguration;

trait DescribeDashboardsQAConfigurationTrait
{
    /**
     * @param DescribeDashboardsQAConfigurationRequest $args
     * @return DescribeDashboardsQAConfigurationResponse
     */
    public function describeDashboardsQAConfiguration(DescribeDashboardsQAConfigurationRequest $args)
    {
        $result = parent::describeDashboardsQAConfiguration($args->toArray());
        return new DescribeDashboardsQAConfigurationResponse($result->toArray());
    }
}
