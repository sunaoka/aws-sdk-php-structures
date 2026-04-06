<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\StartParticipantReplication;

trait StartParticipantReplicationTrait
{
    /**
     * @param StartParticipantReplicationRequest $args
     * @return StartParticipantReplicationResponse
     */
    public function startParticipantReplication(StartParticipantReplicationRequest $args)
    {
        $result = parent::startParticipantReplication($args->toArray());
        return new StartParticipantReplicationResponse($result->toArray());
    }
}
