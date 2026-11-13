<?php

namespace Sunaoka\Aws\Structures\SecretsManager\AssociateCrossAccountReplica;

trait AssociateCrossAccountReplicaTrait
{
    /**
     * @param AssociateCrossAccountReplicaRequest $args
     * @return AssociateCrossAccountReplicaResponse
     */
    public function associateCrossAccountReplica(AssociateCrossAccountReplicaRequest $args)
    {
        $result = parent::associateCrossAccountReplica($args->toArray());
        return new AssociateCrossAccountReplicaResponse($result->toArray());
    }
}
