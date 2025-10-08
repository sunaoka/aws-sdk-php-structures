<?php

namespace Sunaoka\Aws\Structures\CodeCommit\DeleteFile;

trait DeleteFileTrait
{
    /**
     * @param DeleteFileRequest $args
     * @return DeleteFileResponse
     */
    public function deleteFile(DeleteFileRequest $args)
    {
        $result = parent::deleteFile($args->toArray());
        return new DeleteFileResponse($result->toArray());
    }
}
