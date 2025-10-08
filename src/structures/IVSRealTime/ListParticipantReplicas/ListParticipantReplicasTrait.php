<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\ListParticipantReplicas;

trait ListParticipantReplicasTrait
{
    /**
     * @param ListParticipantReplicasRequest $args
     * @return ListParticipantReplicasResponse
     */
    public function listParticipantReplicas(ListParticipantReplicasRequest $args)
    {
        $result = parent::listParticipantReplicas($args->toArray());
        return new ListParticipantReplicasResponse($result->toArray());
    }
}
