<?php

namespace Sunaoka\Aws\Structures\mgn\RetryDataReplication;

trait RetryDataReplicationTrait
{
    /**
     * @param RetryDataReplicationRequest $args
     * @return RetryDataReplicationResponse
     */
    public function retryDataReplication(RetryDataReplicationRequest $args)
    {
        $result = parent::retryDataReplication($args->toArray());
        return new RetryDataReplicationResponse($result->toArray());
    }
}
