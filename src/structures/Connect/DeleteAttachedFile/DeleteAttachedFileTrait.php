<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteAttachedFile;

trait DeleteAttachedFileTrait
{
    /**
     * @param DeleteAttachedFileRequest $args
     * @return DeleteAttachedFileResponse
     */
    public function deleteAttachedFile(DeleteAttachedFileRequest $args)
    {
        $result = parent::deleteAttachedFile($args->toArray());
        return new DeleteAttachedFileResponse($result->toArray());
    }
}
