<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateGameServer;

trait UpdateGameServerTrait
{
    /**
     * @param UpdateGameServerRequest $args
     * @return UpdateGameServerResponse
     */
    public function updateGameServer(UpdateGameServerRequest $args)
    {
        $result = parent::updateGameServer($args->toArray());
        return new UpdateGameServerResponse($result->toArray());
    }
}
