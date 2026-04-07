<?php

namespace Sunaoka\Aws\Structures\S3Files\GetFileSystem;

trait GetFileSystemTrait
{
    /**
     * @param GetFileSystemRequest $args
     * @return GetFileSystemResponse
     */
    public function getFileSystem(GetFileSystemRequest $args)
    {
        $result = parent::getFileSystem($args->toArray());
        return new GetFileSystemResponse($result->toArray());
    }
}
