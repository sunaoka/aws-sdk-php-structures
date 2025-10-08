<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetUploadJob;

trait GetUploadJobTrait
{
    /**
     * @param GetUploadJobRequest $args
     * @return GetUploadJobResponse
     */
    public function getUploadJob(GetUploadJobRequest $args)
    {
        $result = parent::getUploadJob($args->toArray());
        return new GetUploadJobResponse($result->toArray());
    }
}
