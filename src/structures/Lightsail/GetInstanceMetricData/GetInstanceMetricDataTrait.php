<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetInstanceMetricData;

trait GetInstanceMetricDataTrait
{
    /**
     * @param GetInstanceMetricDataRequest $args
     * @return GetInstanceMetricDataResponse
     */
    public function getInstanceMetricData(GetInstanceMetricDataRequest $args)
    {
        $result = parent::getInstanceMetricData($args->toArray());
        return new GetInstanceMetricDataResponse($result->toArray());
    }
}
