<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetContainerServiceMetricData;

trait GetContainerServiceMetricDataTrait
{
    /**
     * @param GetContainerServiceMetricDataRequest $args
     * @return GetContainerServiceMetricDataResponse
     */
    public function getContainerServiceMetricData(GetContainerServiceMetricDataRequest $args)
    {
        $result = parent::getContainerServiceMetricData($args->toArray());
        return new GetContainerServiceMetricDataResponse($result->toArray());
    }
}
