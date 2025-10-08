<?php

namespace Sunaoka\Aws\Structures\IVS\DeletePlaybackKeyPair;

trait DeletePlaybackKeyPairTrait
{
    /**
     * @param DeletePlaybackKeyPairRequest $args
     * @return DeletePlaybackKeyPairResponse
     */
    public function deletePlaybackKeyPair(DeletePlaybackKeyPairRequest $args)
    {
        $result = parent::deletePlaybackKeyPair($args->toArray());
        return new DeletePlaybackKeyPairResponse($result->toArray());
    }
}
