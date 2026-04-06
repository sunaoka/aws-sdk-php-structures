<?php

namespace Sunaoka\Aws\Structures\GameSparks\ListGames;

trait ListGamesTrait
{
    /**
     * @param ListGamesRequest $args
     * @return ListGamesResponse
     */
    public function listGames(ListGamesRequest $args)
    {
        $result = parent::listGames($args->toArray());
        return new ListGamesResponse($result->toArray());
    }
}
