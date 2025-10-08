<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DeleteDirectory;

trait DeleteDirectoryTrait
{
    /**
     * @param DeleteDirectoryRequest $args
     * @return DeleteDirectoryResponse
     */
    public function deleteDirectory(DeleteDirectoryRequest $args)
    {
        $result = parent::deleteDirectory($args->toArray());
        return new DeleteDirectoryResponse($result->toArray());
    }
}
