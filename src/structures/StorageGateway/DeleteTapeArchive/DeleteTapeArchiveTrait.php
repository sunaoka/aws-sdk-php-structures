<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DeleteTapeArchive;

trait DeleteTapeArchiveTrait
{
    /**
     * @param DeleteTapeArchiveRequest $args
     * @return DeleteTapeArchiveResponse
     */
    public function deleteTapeArchive(DeleteTapeArchiveRequest $args)
    {
        $result = parent::deleteTapeArchive($args->toArray());
        return new DeleteTapeArchiveResponse($result->toArray());
    }
}
