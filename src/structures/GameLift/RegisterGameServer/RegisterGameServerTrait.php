<?php

namespace Sunaoka\Aws\Structures\GameLift\RegisterGameServer;

trait RegisterGameServerTrait
{
    /**
     * @param RegisterGameServerRequest $args
     * @return RegisterGameServerResponse
     */
    public function registerGameServer(RegisterGameServerRequest $args)
    {
        $result = parent::registerGameServer($args->toArray());
        return new RegisterGameServerResponse($result->toArray());
    }
}
