<?php

namespace Sunaoka\Aws\Structures\Connect\GetCurrentMetricData;

trait GetCurrentMetricDataTrait
{
    /**
     * @param GetCurrentMetricDataRequest $args
     * @return GetCurrentMetricDataResponse
     */
    public function getCurrentMetricData(GetCurrentMetricDataRequest $args)
    {
        $result = parent::getCurrentMetricData($args->toArray());
        return new GetCurrentMetricDataResponse($result->toArray());
    }
}
