<?php

namespace Sunaoka\Aws\Structures\GameLift\DeleteGameSessionQueue;

trait DeleteGameSessionQueueTrait
{
    /**
     * @param DeleteGameSessionQueueRequest $args
     * @return DeleteGameSessionQueueResponse
     */
    public function deleteGameSessionQueue(DeleteGameSessionQueueRequest $args)
    {
        $result = parent::deleteGameSessionQueue($args->toArray());
        return new DeleteGameSessionQueueResponse($result->toArray());
    }
}
