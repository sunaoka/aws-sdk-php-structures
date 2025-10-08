<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\CreateStandbyWorkspaces;

trait CreateStandbyWorkspacesTrait
{
    /**
     * @param CreateStandbyWorkspacesRequest $args
     * @return CreateStandbyWorkspacesResponse
     */
    public function createStandbyWorkspaces(CreateStandbyWorkspacesRequest $args)
    {
        $result = parent::createStandbyWorkspaces($args->toArray());
        return new CreateStandbyWorkspacesResponse($result->toArray());
    }
}
