<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetDistributionMetricData;

trait GetDistributionMetricDataTrait
{
    /**
     * @param GetDistributionMetricDataRequest $args
     * @return GetDistributionMetricDataResponse
     */
    public function getDistributionMetricData(GetDistributionMetricDataRequest $args)
    {
        $result = parent::getDistributionMetricData($args->toArray());
        return new GetDistributionMetricDataResponse($result->toArray());
    }
}
