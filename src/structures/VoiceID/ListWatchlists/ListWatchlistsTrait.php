<?php

namespace Sunaoka\Aws\Structures\VoiceID\ListWatchlists;

trait ListWatchlistsTrait
{
    /**
     * @param ListWatchlistsRequest $args
     * @return ListWatchlistsResponse
     */
    public function listWatchlists(ListWatchlistsRequest $args)
    {
        $result = parent::listWatchlists($args->toArray());
        return new ListWatchlistsResponse($result->toArray());
    }
}
