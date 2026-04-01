<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\CreatePrivateConnection;

trait CreatePrivateConnectionTrait
{
    /**
     * @param CreatePrivateConnectionRequest $args
     * @return CreatePrivateConnectionResponse
     */
    public function createPrivateConnection(CreatePrivateConnectionRequest $args)
    {
        $result = parent::createPrivateConnection($args->toArray());
        return new CreatePrivateConnectionResponse($result->toArray());
    }
}
