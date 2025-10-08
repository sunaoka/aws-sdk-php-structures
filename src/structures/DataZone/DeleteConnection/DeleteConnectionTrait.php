<?php

namespace Sunaoka\Aws\Structures\DataZone\DeleteConnection;

trait DeleteConnectionTrait
{
    /**
     * @param DeleteConnectionRequest $args
     * @return DeleteConnectionResponse
     */
    public function deleteConnection(DeleteConnectionRequest $args)
    {
        $result = parent::deleteConnection($args->toArray());
        return new DeleteConnectionResponse($result->toArray());
    }
}
