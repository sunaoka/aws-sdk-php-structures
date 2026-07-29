<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListDatasetDataSegments;

trait ListDatasetDataSegmentsTrait
{
    /**
     * @param ListDatasetDataSegmentsRequest $args
     * @return ListDatasetDataSegmentsResponse
     */
    public function listDatasetDataSegments(ListDatasetDataSegmentsRequest $args)
    {
        $result = parent::listDatasetDataSegments($args->toArray());
        return new ListDatasetDataSegmentsResponse($result->toArray());
    }
}
