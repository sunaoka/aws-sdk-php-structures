<?php

namespace Sunaoka\Aws\Structures\Amplify\StartJob;

trait StartJobTrait
{
    /**
     * @param StartJobRequest $args
     * @return StartJobResponse
     */
    public function startJob(StartJobRequest $args)
    {
        $result = parent::startJob($args->toArray());
        return new StartJobResponse($result->toArray());
    }
}
