<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\BatchAssociateDataSegmentsToDataset;

trait BatchAssociateDataSegmentsToDatasetTrait
{
    /**
     * @param BatchAssociateDataSegmentsToDatasetRequest $args
     * @return BatchAssociateDataSegmentsToDatasetResponse
     */
    public function batchAssociateDataSegmentsToDataset(BatchAssociateDataSegmentsToDatasetRequest $args)
    {
        $result = parent::batchAssociateDataSegmentsToDataset($args->toArray());
        return new BatchAssociateDataSegmentsToDatasetResponse($result->toArray());
    }
}
