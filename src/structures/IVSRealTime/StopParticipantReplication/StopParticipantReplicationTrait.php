<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\StopParticipantReplication;

trait StopParticipantReplicationTrait
{
    /**
     * @param StopParticipantReplicationRequest $args
     * @return StopParticipantReplicationResponse
     */
    public function stopParticipantReplication(StopParticipantReplicationRequest $args)
    {
        $result = parent::stopParticipantReplication($args->toArray());
        return new StopParticipantReplicationResponse($result->toArray());
    }
}
