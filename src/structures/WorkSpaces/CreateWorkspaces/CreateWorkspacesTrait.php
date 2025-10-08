<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\CreateWorkspaces;

trait CreateWorkspacesTrait
{
    /**
     * @param CreateWorkspacesRequest $args
     * @return CreateWorkspacesResponse
     */
    public function createWorkspaces(CreateWorkspacesRequest $args)
    {
        $result = parent::createWorkspaces($args->toArray());
        return new CreateWorkspacesResponse($result->toArray());
    }
}
