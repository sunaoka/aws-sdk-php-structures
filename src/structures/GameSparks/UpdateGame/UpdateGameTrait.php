<?php

namespace Sunaoka\Aws\Structures\GameSparks\UpdateGame;

trait UpdateGameTrait
{
    /**
     * @param UpdateGameRequest $args
     * @return UpdateGameResponse
     */
    public function updateGame(UpdateGameRequest $args)
    {
        $result = parent::updateGame($args->toArray());
        return new UpdateGameResponse($result->toArray());
    }
}
