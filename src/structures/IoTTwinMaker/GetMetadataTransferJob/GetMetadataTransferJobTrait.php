<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetMetadataTransferJob;

trait GetMetadataTransferJobTrait
{
    /**
     * @param GetMetadataTransferJobRequest $args
     * @return GetMetadataTransferJobResponse
     */
    public function getMetadataTransferJob(GetMetadataTransferJobRequest $args)
    {
        $result = parent::getMetadataTransferJob($args->toArray());
        return new GetMetadataTransferJobResponse($result->toArray());
    }
}
