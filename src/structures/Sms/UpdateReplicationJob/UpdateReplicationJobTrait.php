<?php

namespace Sunaoka\Aws\Structures\Sms\UpdateReplicationJob;

trait UpdateReplicationJobTrait
{
    /**
     * @param UpdateReplicationJobRequest $args
     * @return UpdateReplicationJobResponse
     */
    public function updateReplicationJob(UpdateReplicationJobRequest $args)
    {
        $result = parent::updateReplicationJob($args->toArray());
        return new UpdateReplicationJobResponse($result->toArray());
    }
}
