<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateGameSession;

trait CreateGameSessionTrait
{
    /**
     * @param CreateGameSessionRequest $args
     * @return CreateGameSessionResponse
     */
    public function createGameSession(CreateGameSessionRequest $args)
    {
        $result = parent::createGameSession($args->toArray());
        return new CreateGameSessionResponse($result->toArray());
    }
}
