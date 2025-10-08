<?php

namespace Sunaoka\Aws\Structures\Lightsail\DownloadDefaultKeyPair;

trait DownloadDefaultKeyPairTrait
{
    /**
     * @param DownloadDefaultKeyPairRequest $args
     * @return DownloadDefaultKeyPairResponse
     */
    public function downloadDefaultKeyPair(DownloadDefaultKeyPairRequest $args)
    {
        $result = parent::downloadDefaultKeyPair($args->toArray());
        return new DownloadDefaultKeyPairResponse($result->toArray());
    }
}
