<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateDiscoveryJob;

trait UpdateDiscoveryJobTrait
{
    /**
     * @param UpdateDiscoveryJobRequest $args
     * @return UpdateDiscoveryJobResponse
     */
    public function updateDiscoveryJob(UpdateDiscoveryJobRequest $args)
    {
        $result = parent::updateDiscoveryJob($args->toArray());
        return new UpdateDiscoveryJobResponse($result->toArray());
    }
}
