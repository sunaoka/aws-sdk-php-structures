<?php

namespace Sunaoka\Aws\Structures\Ec2\GetCapacityManagerMetricData;

trait GetCapacityManagerMetricDataTrait
{
    /**
     * @param GetCapacityManagerMetricDataRequest $args
     * @return GetCapacityManagerMetricDataResponse
     */
    public function getCapacityManagerMetricData(GetCapacityManagerMetricDataRequest $args)
    {
        $result = parent::getCapacityManagerMetricData($args->toArray());
        return new GetCapacityManagerMetricDataResponse($result->toArray());
    }
}
