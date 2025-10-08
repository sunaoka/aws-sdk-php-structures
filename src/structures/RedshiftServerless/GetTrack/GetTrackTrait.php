<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\GetTrack;

trait GetTrackTrait
{
    /**
     * @param GetTrackRequest $args
     * @return GetTrackResponse
     */
    public function getTrack(GetTrackRequest $args)
    {
        $result = parent::getTrack($args->toArray());
        return new GetTrackResponse($result->toArray());
    }
}
