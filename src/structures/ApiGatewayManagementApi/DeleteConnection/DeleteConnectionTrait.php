<?php

namespace Sunaoka\Aws\Structures\ApiGatewayManagementApi\DeleteConnection;

trait DeleteConnectionTrait
{
    /**
     * @param DeleteConnectionRequest $args
     * @return void
     */
    public function deleteConnection(DeleteConnectionRequest $args)
    {
        parent::deleteConnection($args->toArray());
    }
}
