<?php

namespace Sunaoka\Aws\Structures\DirectoryService\CreateDirectory;

trait CreateDirectoryTrait
{
    /**
     * @param CreateDirectoryRequest $args
     * @return CreateDirectoryResponse
     */
    public function createDirectory(CreateDirectoryRequest $args)
    {
        $result = parent::createDirectory($args->toArray());
        return new CreateDirectoryResponse($result->toArray());
    }
}
