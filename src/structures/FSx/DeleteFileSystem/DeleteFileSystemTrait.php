<?php

namespace Sunaoka\Aws\Structures\FSx\DeleteFileSystem;

trait DeleteFileSystemTrait
{
    /**
     * @param DeleteFileSystemRequest $args
     * @return DeleteFileSystemResponse
     */
    public function deleteFileSystem(DeleteFileSystemRequest $args)
    {
        $result = parent::deleteFileSystem($args->toArray());
        return new DeleteFileSystemResponse($result->toArray());
    }
}
