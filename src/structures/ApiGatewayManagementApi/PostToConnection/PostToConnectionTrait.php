<?php

namespace Sunaoka\Aws\Structures\ApiGatewayManagementApi\PostToConnection;

trait PostToConnectionTrait
{
    /**
     * @param PostToConnectionRequest $args
     * @return void
     */
    public function postToConnection(PostToConnectionRequest $args)
    {
        parent::postToConnection($args->toArray());
    }
}
