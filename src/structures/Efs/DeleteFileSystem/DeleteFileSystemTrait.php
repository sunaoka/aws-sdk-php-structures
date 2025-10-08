<?php

namespace Sunaoka\Aws\Structures\Efs\DeleteFileSystem;

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
