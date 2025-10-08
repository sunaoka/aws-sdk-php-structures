<?php

namespace Sunaoka\Aws\Structures\Omics\GetReadSetActivationJob;

trait GetReadSetActivationJobTrait
{
    /**
     * @param GetReadSetActivationJobRequest $args
     * @return GetReadSetActivationJobResponse
     */
    public function getReadSetActivationJob(GetReadSetActivationJobRequest $args)
    {
        $result = parent::getReadSetActivationJob($args->toArray());
        return new GetReadSetActivationJobResponse($result->toArray());
    }
}
