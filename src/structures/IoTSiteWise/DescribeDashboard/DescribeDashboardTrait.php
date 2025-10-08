<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeDashboard;

trait DescribeDashboardTrait
{
    /**
     * @param DescribeDashboardRequest $args
     * @return DescribeDashboardResponse
     */
    public function describeDashboard(DescribeDashboardRequest $args)
    {
        $result = parent::describeDashboard($args->toArray());
        return new DescribeDashboardResponse($result->toArray());
    }
}
