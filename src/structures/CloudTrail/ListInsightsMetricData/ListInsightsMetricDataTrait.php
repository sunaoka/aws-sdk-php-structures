<?php

namespace Sunaoka\Aws\Structures\CloudTrail\ListInsightsMetricData;

trait ListInsightsMetricDataTrait
{
    /**
     * @param ListInsightsMetricDataRequest $args
     * @return ListInsightsMetricDataResponse
     */
    public function listInsightsMetricData(ListInsightsMetricDataRequest $args)
    {
        $result = parent::listInsightsMetricData($args->toArray());
        return new ListInsightsMetricDataResponse($result->toArray());
    }
}
