<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\DeleteArchive;

trait DeleteArchiveTrait
{
    /**
     * @param DeleteArchiveRequest $args
     * @return DeleteArchiveResponse
     */
    public function deleteArchive(DeleteArchiveRequest $args)
    {
        $result = parent::deleteArchive($args->toArray());
        return new DeleteArchiveResponse($result->toArray());
    }
}
