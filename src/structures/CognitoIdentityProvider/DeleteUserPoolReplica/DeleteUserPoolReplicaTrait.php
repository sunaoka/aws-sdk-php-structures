<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DeleteUserPoolReplica;

trait DeleteUserPoolReplicaTrait
{
    /**
     * @param DeleteUserPoolReplicaRequest $args
     * @return DeleteUserPoolReplicaResponse
     */
    public function deleteUserPoolReplica(DeleteUserPoolReplicaRequest $args)
    {
        $result = parent::deleteUserPoolReplica($args->toArray());
        return new DeleteUserPoolReplicaResponse($result->toArray());
    }
}
