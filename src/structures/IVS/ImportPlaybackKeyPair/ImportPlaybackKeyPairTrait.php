<?php

namespace Sunaoka\Aws\Structures\IVS\ImportPlaybackKeyPair;

trait ImportPlaybackKeyPairTrait
{
    /**
     * @param ImportPlaybackKeyPairRequest $args
     * @return ImportPlaybackKeyPairResponse
     */
    public function importPlaybackKeyPair(ImportPlaybackKeyPairRequest $args)
    {
        $result = parent::importPlaybackKeyPair($args->toArray());
        return new ImportPlaybackKeyPairResponse($result->toArray());
    }
}
