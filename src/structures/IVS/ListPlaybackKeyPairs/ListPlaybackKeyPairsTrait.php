<?php

namespace Sunaoka\Aws\Structures\IVS\ListPlaybackKeyPairs;

trait ListPlaybackKeyPairsTrait
{
    /**
     * @param ListPlaybackKeyPairsRequest $args
     * @return ListPlaybackKeyPairsResponse
     */
    public function listPlaybackKeyPairs(ListPlaybackKeyPairsRequest $args)
    {
        $result = parent::listPlaybackKeyPairs($args->toArray());
        return new ListPlaybackKeyPairsResponse($result->toArray());
    }
}
