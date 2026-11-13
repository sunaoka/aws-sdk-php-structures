<?php

namespace Sunaoka\Aws\Structures\SecretsManager\DisassociateCrossAccountReplica;

trait DisassociateCrossAccountReplicaTrait
{
    /**
     * @param DisassociateCrossAccountReplicaRequest $args
     * @return DisassociateCrossAccountReplicaResponse
     */
    public function disassociateCrossAccountReplica(DisassociateCrossAccountReplicaRequest $args)
    {
        $result = parent::disassociateCrossAccountReplica($args->toArray());
        return new DisassociateCrossAccountReplicaResponse($result->toArray());
    }
}
