<?php

namespace Sunaoka\Aws\Structures\drs\StartReplication;

trait StartReplicationTrait
{
    /**
     * @param StartReplicationRequest $args
     * @return StartReplicationResponse
     */
    public function startReplication(StartReplicationRequest $args)
    {
        $result = parent::startReplication($args->toArray());
        return new StartReplicationResponse($result->toArray());
    }
}
