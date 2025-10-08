<?php

namespace Sunaoka\Aws\Structures\SesV2\BatchGetMetricData;

trait BatchGetMetricDataTrait
{
    /**
     * @param BatchGetMetricDataRequest $args
     * @return BatchGetMetricDataResponse
     */
    public function batchGetMetricData(BatchGetMetricDataRequest $args)
    {
        $result = parent::batchGetMetricData($args->toArray());
        return new BatchGetMetricDataResponse($result->toArray());
    }
}
