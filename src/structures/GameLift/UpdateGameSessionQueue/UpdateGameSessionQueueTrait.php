<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateGameSessionQueue;

trait UpdateGameSessionQueueTrait
{
    /**
     * @param UpdateGameSessionQueueRequest $args
     * @return UpdateGameSessionQueueResponse
     */
    public function updateGameSessionQueue(UpdateGameSessionQueueRequest $args)
    {
        $result = parent::updateGameSessionQueue($args->toArray());
        return new UpdateGameSessionQueueResponse($result->toArray());
    }
}
