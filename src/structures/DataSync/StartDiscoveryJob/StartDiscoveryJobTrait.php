<?php

namespace Sunaoka\Aws\Structures\DataSync\StartDiscoveryJob;

trait StartDiscoveryJobTrait
{
    /**
     * @param StartDiscoveryJobRequest $args
     * @return StartDiscoveryJobResponse
     */
    public function startDiscoveryJob(StartDiscoveryJobRequest $args)
    {
        $result = parent::startDiscoveryJob($args->toArray());
        return new StartDiscoveryJobResponse($result->toArray());
    }
}
