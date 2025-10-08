<?php

namespace Sunaoka\Aws\Structures\VoiceID\UpdateWatchlist;

trait UpdateWatchlistTrait
{
    /**
     * @param UpdateWatchlistRequest $args
     * @return UpdateWatchlistResponse
     */
    public function updateWatchlist(UpdateWatchlistRequest $args)
    {
        $result = parent::updateWatchlist($args->toArray());
        return new UpdateWatchlistResponse($result->toArray());
    }
}
