<?php

namespace Sunaoka\Aws\Structures\GameSparks\GetGame;

trait GetGameTrait
{
    /**
     * @param GetGameRequest $args
     * @return GetGameResponse
     */
    public function getGame(GetGameRequest $args)
    {
        $result = parent::getGame($args->toArray());
        return new GetGameResponse($result->toArray());
    }
}
