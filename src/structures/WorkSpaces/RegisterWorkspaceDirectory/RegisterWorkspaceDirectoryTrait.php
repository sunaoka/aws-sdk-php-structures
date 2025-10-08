<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\RegisterWorkspaceDirectory;

trait RegisterWorkspaceDirectoryTrait
{
    /**
     * @param RegisterWorkspaceDirectoryRequest $args
     * @return RegisterWorkspaceDirectoryResponse
     */
    public function registerWorkspaceDirectory(RegisterWorkspaceDirectoryRequest $args)
    {
        $result = parent::registerWorkspaceDirectory($args->toArray());
        return new RegisterWorkspaceDirectoryResponse($result->toArray());
    }
}
