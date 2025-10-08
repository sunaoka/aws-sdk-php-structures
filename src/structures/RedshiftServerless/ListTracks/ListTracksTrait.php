<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\ListTracks;

trait ListTracksTrait
{
    /**
     * @param ListTracksRequest $args
     * @return ListTracksResponse
     */
    public function listTracks(ListTracksRequest $args)
    {
        $result = parent::listTracks($args->toArray());
        return new ListTracksResponse($result->toArray());
    }
}
