<?php

namespace Sunaoka\Aws\Structures\Efs\CreateFileSystem;

trait CreateFileSystemTrait
{
    /**
     * @param CreateFileSystemRequest $args
     * @return CreateFileSystemResponse
     */
    public function createFileSystem(CreateFileSystemRequest $args)
    {
        $result = parent::createFileSystem($args->toArray());
        return new CreateFileSystemResponse($result->toArray());
    }
}
