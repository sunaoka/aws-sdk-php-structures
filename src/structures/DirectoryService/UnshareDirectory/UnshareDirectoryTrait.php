<?php

namespace Sunaoka\Aws\Structures\DirectoryService\UnshareDirectory;

trait UnshareDirectoryTrait
{
    /**
     * @param UnshareDirectoryRequest $args
     * @return UnshareDirectoryResponse
     */
    public function unshareDirectory(UnshareDirectoryRequest $args)
    {
        $result = parent::unshareDirectory($args->toArray());
        return new UnshareDirectoryResponse($result->toArray());
    }
}
