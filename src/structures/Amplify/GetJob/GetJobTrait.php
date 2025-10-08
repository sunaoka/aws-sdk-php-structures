<?php

namespace Sunaoka\Aws\Structures\Amplify\GetJob;

trait GetJobTrait
{
    /**
     * @param GetJobRequest $args
     * @return GetJobResponse
     */
    public function getJob(GetJobRequest $args)
    {
        $result = parent::getJob($args->toArray());
        return new GetJobResponse($result->toArray());
    }
}
