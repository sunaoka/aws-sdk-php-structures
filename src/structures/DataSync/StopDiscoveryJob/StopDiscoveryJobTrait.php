<?php

namespace Sunaoka\Aws\Structures\DataSync\StopDiscoveryJob;

trait StopDiscoveryJobTrait
{
    /**
     * @param StopDiscoveryJobRequest $args
     * @return StopDiscoveryJobResponse
     */
    public function stopDiscoveryJob(StopDiscoveryJobRequest $args)
    {
        $result = parent::stopDiscoveryJob($args->toArray());
        return new StopDiscoveryJobResponse($result->toArray());
    }
}
