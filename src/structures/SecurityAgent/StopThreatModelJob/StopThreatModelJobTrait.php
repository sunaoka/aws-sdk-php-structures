<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\StopThreatModelJob;

trait StopThreatModelJobTrait
{
    /**
     * @param StopThreatModelJobRequest $args
     * @return StopThreatModelJobResponse
     */
    public function stopThreatModelJob(StopThreatModelJobRequest $args)
    {
        $result = parent::stopThreatModelJob($args->toArray());
        return new StopThreatModelJobResponse($result->toArray());
    }
}
