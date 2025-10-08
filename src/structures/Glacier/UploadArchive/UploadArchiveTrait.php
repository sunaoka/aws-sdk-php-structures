<?php

namespace Sunaoka\Aws\Structures\Glacier\UploadArchive;

trait UploadArchiveTrait
{
    /**
     * @param UploadArchiveRequest $args
     * @return UploadArchiveResponse
     */
    public function uploadArchive(UploadArchiveRequest $args)
    {
        $result = parent::uploadArchive($args->toArray());
        return new UploadArchiveResponse($result->toArray());
    }
}
