<?php

namespace Sunaoka\Aws\Structures\VoiceID\DeleteWatchlist;

trait DeleteWatchlistTrait
{
    /**
     * @param DeleteWatchlistRequest $args
     * @return void
     */
    public function deleteWatchlist(DeleteWatchlistRequest $args)
    {
        parent::deleteWatchlist($args->toArray());
    }
}
