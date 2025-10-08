<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateGameSessionQueue;

trait CreateGameSessionQueueTrait
{
    /**
     * @param CreateGameSessionQueueRequest $args
     * @return CreateGameSessionQueueResponse
     */
    public function createGameSessionQueue(CreateGameSessionQueueRequest $args)
    {
        $result = parent::createGameSessionQueue($args->toArray());
        return new CreateGameSessionQueueResponse($result->toArray());
    }
}
