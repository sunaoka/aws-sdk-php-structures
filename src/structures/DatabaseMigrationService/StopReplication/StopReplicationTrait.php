<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\StopReplication;

trait StopReplicationTrait
{
    /**
     * @param StopReplicationRequest $args
     * @return StopReplicationResponse
     */
    public function stopReplication(StopReplicationRequest $args)
    {
        $result = parent::stopReplication($args->toArray());
        return new StopReplicationResponse($result->toArray());
    }
}
