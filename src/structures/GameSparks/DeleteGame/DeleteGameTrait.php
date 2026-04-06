<?php

namespace Sunaoka\Aws\Structures\GameSparks\DeleteGame;

trait DeleteGameTrait
{
    /**
     * @param DeleteGameRequest $args
     * @return DeleteGameResponse
     */
    public function deleteGame(DeleteGameRequest $args)
    {
        $result = parent::deleteGame($args->toArray());
        return new DeleteGameResponse($result->toArray());
    }
}
