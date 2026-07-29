<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\BatchDeleteDatasetDataSegments;

trait BatchDeleteDatasetDataSegmentsTrait
{
    /**
     * @param BatchDeleteDatasetDataSegmentsRequest $args
     * @return BatchDeleteDatasetDataSegmentsResponse
     */
    public function batchDeleteDatasetDataSegments(BatchDeleteDatasetDataSegmentsRequest $args)
    {
        $result = parent::batchDeleteDatasetDataSegments($args->toArray());
        return new BatchDeleteDatasetDataSegmentsResponse($result->toArray());
    }
}
