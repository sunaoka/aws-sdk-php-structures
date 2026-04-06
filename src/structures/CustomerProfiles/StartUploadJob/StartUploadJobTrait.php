<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\StartUploadJob;

trait StartUploadJobTrait
{
    /**
     * @param StartUploadJobRequest $args
     * @return StartUploadJobResponse
     */
    public function startUploadJob(StartUploadJobRequest $args)
    {
        $result = parent::startUploadJob($args->toArray());
        return new StartUploadJobResponse($result->toArray());
    }
}
