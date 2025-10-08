<?php

namespace Sunaoka\Aws\Structures\drs\DisconnectSourceServer;

trait DisconnectSourceServerTrait
{
    /**
     * @param DisconnectSourceServerRequest $args
     * @return DisconnectSourceServerResponse
     */
    public function disconnectSourceServer(DisconnectSourceServerRequest $args)
    {
        $result = parent::disconnectSourceServer($args->toArray());
        return new DisconnectSourceServerResponse($result->toArray());
    }
}
