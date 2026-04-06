<?php

namespace Sunaoka\Aws\Structures\Sms\CreateReplicationJob;

trait CreateReplicationJobTrait
{
    /**
     * @param CreateReplicationJobRequest $args
     * @return CreateReplicationJobResponse
     */
    public function createReplicationJob(CreateReplicationJobRequest $args)
    {
        $result = parent::createReplicationJob($args->toArray());
        return new CreateReplicationJobResponse($result->toArray());
    }
}
