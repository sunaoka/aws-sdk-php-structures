<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\DeletePrivateConnection;

trait DeletePrivateConnectionTrait
{
    /**
     * @param DeletePrivateConnectionRequest $args
     * @return DeletePrivateConnectionResponse
     */
    public function deletePrivateConnection(DeletePrivateConnectionRequest $args)
    {
        $result = parent::deletePrivateConnection($args->toArray());
        return new DeletePrivateConnectionResponse($result->toArray());
    }
}
