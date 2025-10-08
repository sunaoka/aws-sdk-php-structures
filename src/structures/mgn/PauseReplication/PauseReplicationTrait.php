<?php

namespace Sunaoka\Aws\Structures\mgn\PauseReplication;

trait PauseReplicationTrait
{
    /**
     * @param PauseReplicationRequest $args
     * @return PauseReplicationResponse
     */
    public function pauseReplication(PauseReplicationRequest $args)
    {
        $result = parent::pauseReplication($args->toArray());
        return new PauseReplicationResponse($result->toArray());
    }
}
