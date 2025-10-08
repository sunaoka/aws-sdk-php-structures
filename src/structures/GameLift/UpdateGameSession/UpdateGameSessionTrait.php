<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateGameSession;

trait UpdateGameSessionTrait
{
    /**
     * @param UpdateGameSessionRequest $args
     * @return UpdateGameSessionResponse
     */
    public function updateGameSession(UpdateGameSessionRequest $args)
    {
        $result = parent::updateGameSession($args->toArray());
        return new UpdateGameSessionResponse($result->toArray());
    }
}
