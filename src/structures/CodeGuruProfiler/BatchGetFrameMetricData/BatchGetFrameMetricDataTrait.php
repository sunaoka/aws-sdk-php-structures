<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\BatchGetFrameMetricData;

trait BatchGetFrameMetricDataTrait
{
    /**
     * @param BatchGetFrameMetricDataRequest $args
     * @return BatchGetFrameMetricDataResponse
     */
    public function batchGetFrameMetricData(BatchGetFrameMetricDataRequest $args)
    {
        $result = parent::batchGetFrameMetricData($args->toArray());
        return new BatchGetFrameMetricDataResponse($result->toArray());
    }
}
