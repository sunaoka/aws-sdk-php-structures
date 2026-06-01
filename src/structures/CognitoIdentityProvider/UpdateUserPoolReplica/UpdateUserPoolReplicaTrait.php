<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\UpdateUserPoolReplica;

trait UpdateUserPoolReplicaTrait
{
    /**
     * @param UpdateUserPoolReplicaRequest $args
     * @return UpdateUserPoolReplicaResponse
     */
    public function updateUserPoolReplica(UpdateUserPoolReplicaRequest $args)
    {
        $result = parent::updateUserPoolReplica($args->toArray());
        return new UpdateUserPoolReplicaResponse($result->toArray());
    }
}
