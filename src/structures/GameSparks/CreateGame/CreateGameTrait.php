<?php

namespace Sunaoka\Aws\Structures\GameSparks\CreateGame;

trait CreateGameTrait
{
    /**
     * @param CreateGameRequest $args
     * @return CreateGameResponse
     */
    public function createGame(CreateGameRequest $args)
    {
        $result = parent::createGame($args->toArray());
        return new CreateGameResponse($result->toArray());
    }
}
