<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\BatchDisassociateDataSegmentsFromDataset;

trait BatchDisassociateDataSegmentsFromDatasetTrait
{
    /**
     * @param BatchDisassociateDataSegmentsFromDatasetRequest $args
     * @return BatchDisassociateDataSegmentsFromDatasetResponse
     */
    public function batchDisassociateDataSegmentsFromDataset(BatchDisassociateDataSegmentsFromDatasetRequest $args)
    {
        $result = parent::batchDisassociateDataSegmentsFromDataset($args->toArray());
        return new BatchDisassociateDataSegmentsFromDatasetResponse($result->toArray());
    }
}
