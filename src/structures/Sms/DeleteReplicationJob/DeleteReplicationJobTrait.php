<?php

namespace Sunaoka\Aws\Structures\Sms\DeleteReplicationJob;

trait DeleteReplicationJobTrait
{
    /**
     * @param DeleteReplicationJobRequest $args
     * @return DeleteReplicationJobResponse
     */
    public function deleteReplicationJob(DeleteReplicationJobRequest $args)
    {
        $result = parent::deleteReplicationJob($args->toArray());
        return new DeleteReplicationJobResponse($result->toArray());
    }
}
