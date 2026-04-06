<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\CreateMetadataTransferJob;

trait CreateMetadataTransferJobTrait
{
    /**
     * @param CreateMetadataTransferJobRequest $args
     * @return CreateMetadataTransferJobResponse
     */
    public function createMetadataTransferJob(CreateMetadataTransferJobRequest $args)
    {
        $result = parent::createMetadataTransferJob($args->toArray());
        return new CreateMetadataTransferJobResponse($result->toArray());
    }
}
