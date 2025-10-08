<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\DeleteConnection;

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
