<?php

namespace Sunaoka\Aws\Structures\IVS\GetPlaybackKeyPair;

trait GetPlaybackKeyPairTrait
{
    /**
     * @param GetPlaybackKeyPairRequest $args
     * @return GetPlaybackKeyPairResponse
     */
    public function getPlaybackKeyPair(GetPlaybackKeyPairRequest $args)
    {
        $result = parent::getPlaybackKeyPair($args->toArray());
        return new GetPlaybackKeyPairResponse($result->toArray());
    }
}
