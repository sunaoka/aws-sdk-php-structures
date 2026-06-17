<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\StartThreatModelJob;

trait StartThreatModelJobTrait
{
    /**
     * @param StartThreatModelJobRequest $args
     * @return StartThreatModelJobResponse
     */
    public function startThreatModelJob(StartThreatModelJobRequest $args)
    {
        $result = parent::startThreatModelJob($args->toArray());
        return new StartThreatModelJobResponse($result->toArray());
    }
}
