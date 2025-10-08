<?php

namespace Sunaoka\Aws\Structures\S3\GetObjectTorrent;

trait GetObjectTorrentTrait
{
    /**
     * @param GetObjectTorrentRequest $args
     * @return GetObjectTorrentResponse
     */
    public function getObjectTorrent(GetObjectTorrentRequest $args)
    {
        $result = parent::getObjectTorrent($args->toArray());
        return new GetObjectTorrentResponse($result->toArray());
    }
}
