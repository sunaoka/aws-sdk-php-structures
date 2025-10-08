<?php

namespace Sunaoka\Aws\Structures\Efs\UpdateFileSystem;

trait UpdateFileSystemTrait
{
    /**
     * @param UpdateFileSystemRequest $args
     * @return UpdateFileSystemResponse
     */
    public function updateFileSystem(UpdateFileSystemRequest $args)
    {
        $result = parent::updateFileSystem($args->toArray());
        return new UpdateFileSystemResponse($result->toArray());
    }
}
