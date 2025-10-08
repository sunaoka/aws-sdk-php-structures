<?php

namespace Sunaoka\Aws\Structures\DirectoryService\ConnectDirectory;

trait ConnectDirectoryTrait
{
    /**
     * @param ConnectDirectoryRequest $args
     * @return ConnectDirectoryResponse
     */
    public function connectDirectory(ConnectDirectoryRequest $args)
    {
        $result = parent::connectDirectory($args->toArray());
        return new ConnectDirectoryResponse($result->toArray());
    }
}
