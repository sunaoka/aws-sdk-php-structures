<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateUploadJob;

trait CreateUploadJobTrait
{
    /**
     * @param CreateUploadJobRequest $args
     * @return CreateUploadJobResponse
     */
    public function createUploadJob(CreateUploadJobRequest $args)
    {
        $result = parent::createUploadJob($args->toArray());
        return new CreateUploadJobResponse($result->toArray());
    }
}
