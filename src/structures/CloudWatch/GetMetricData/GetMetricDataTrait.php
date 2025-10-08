<?php

namespace Sunaoka\Aws\Structures\CloudWatch\GetMetricData;

trait GetMetricDataTrait
{
    /**
     * @param GetMetricDataRequest $args
     * @return GetMetricDataResponse
     */
    public function getMetricData(GetMetricDataRequest $args)
    {
        $result = parent::getMetricData($args->toArray());
        return new GetMetricDataResponse($result->toArray());
    }
}
