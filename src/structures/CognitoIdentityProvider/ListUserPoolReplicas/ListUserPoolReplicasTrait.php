<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListUserPoolReplicas;

trait ListUserPoolReplicasTrait
{
    /**
     * @param ListUserPoolReplicasRequest $args
     * @return ListUserPoolReplicasResponse
     */
    public function listUserPoolReplicas(ListUserPoolReplicasRequest $args)
    {
        $result = parent::listUserPoolReplicas($args->toArray());
        return new ListUserPoolReplicasResponse($result->toArray());
    }
}
