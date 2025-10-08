<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\CancelMetadataTransferJob;

trait CancelMetadataTransferJobTrait
{
    /**
     * @param CancelMetadataTransferJobRequest $args
     * @return CancelMetadataTransferJobResponse
     */
    public function cancelMetadataTransferJob(CancelMetadataTransferJobRequest $args)
    {
        $result = parent::cancelMetadataTransferJob($args->toArray());
        return new CancelMetadataTransferJobResponse($result->toArray());
    }
}
