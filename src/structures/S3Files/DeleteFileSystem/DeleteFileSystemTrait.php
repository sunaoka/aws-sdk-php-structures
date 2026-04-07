<?php

namespace Sunaoka\Aws\Structures\S3Files\DeleteFileSystem;

trait DeleteFileSystemTrait
{
    /**
     * @param DeleteFileSystemRequest $args
     * @return void
     */
    public function deleteFileSystem(DeleteFileSystemRequest $args)
    {
        parent::deleteFileSystem($args->toArray());
    }
}
