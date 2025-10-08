<?php

namespace Sunaoka\Aws\Structures\GameLift\ClaimGameServer;

trait ClaimGameServerTrait
{
    /**
     * @param ClaimGameServerRequest $args
     * @return ClaimGameServerResponse
     */
    public function claimGameServer(ClaimGameServerRequest $args)
    {
        $result = parent::claimGameServer($args->toArray());
        return new ClaimGameServerResponse($result->toArray());
    }
}
