<?php

namespace Sunaoka\Aws\Structures\VoiceID\CreateWatchlist;

trait CreateWatchlistTrait
{
    /**
     * @param CreateWatchlistRequest $args
     * @return CreateWatchlistResponse
     */
    public function createWatchlist(CreateWatchlistRequest $args)
    {
        $result = parent::createWatchlist($args->toArray());
        return new CreateWatchlistResponse($result->toArray());
    }
}
