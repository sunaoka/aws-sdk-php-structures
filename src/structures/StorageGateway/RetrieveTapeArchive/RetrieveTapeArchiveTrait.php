<?php

namespace Sunaoka\Aws\Structures\StorageGateway\RetrieveTapeArchive;

trait RetrieveTapeArchiveTrait
{
    /**
     * @param RetrieveTapeArchiveRequest $args
     * @return RetrieveTapeArchiveResponse
     */
    public function retrieveTapeArchive(RetrieveTapeArchiveRequest $args)
    {
        $result = parent::retrieveTapeArchive($args->toArray());
        return new RetrieveTapeArchiveResponse($result->toArray());
    }
}
