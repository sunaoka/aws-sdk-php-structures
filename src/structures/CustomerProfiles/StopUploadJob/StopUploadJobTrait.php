<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\StopUploadJob;

trait StopUploadJobTrait
{
    /**
     * @param StopUploadJobRequest $args
     * @return StopUploadJobResponse
     */
    public function stopUploadJob(StopUploadJobRequest $args)
    {
        $result = parent::stopUploadJob($args->toArray());
        return new StopUploadJobResponse($result->toArray());
    }
}
