<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ListMetadataTransferJobs;

trait ListMetadataTransferJobsTrait
{
    /**
     * @param ListMetadataTransferJobsRequest $args
     * @return ListMetadataTransferJobsResponse
     */
    public function listMetadataTransferJobs(ListMetadataTransferJobsRequest $args)
    {
        $result = parent::listMetadataTransferJobs($args->toArray());
        return new ListMetadataTransferJobsResponse($result->toArray());
    }
}
