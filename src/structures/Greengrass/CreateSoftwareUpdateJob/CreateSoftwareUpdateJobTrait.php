<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateSoftwareUpdateJob;

trait CreateSoftwareUpdateJobTrait
{
    /**
     * @param CreateSoftwareUpdateJobRequest $args
     * @return CreateSoftwareUpdateJobResponse
     */
    public function createSoftwareUpdateJob(CreateSoftwareUpdateJobRequest $args)
    {
        $result = parent::createSoftwareUpdateJob($args->toArray());
        return new CreateSoftwareUpdateJobResponse($result->toArray());
    }
}
