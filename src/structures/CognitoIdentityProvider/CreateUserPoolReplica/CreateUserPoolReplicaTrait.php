<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateUserPoolReplica;

trait CreateUserPoolReplicaTrait
{
    /**
     * @param CreateUserPoolReplicaRequest $args
     * @return CreateUserPoolReplicaResponse
     */
    public function createUserPoolReplica(CreateUserPoolReplicaRequest $args)
    {
        $result = parent::createUserPoolReplica($args->toArray());
        return new CreateUserPoolReplicaResponse($result->toArray());
    }
}
