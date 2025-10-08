<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\TerminateWorkspaces;

trait TerminateWorkspacesTrait
{
    /**
     * @param TerminateWorkspacesRequest $args
     * @return TerminateWorkspacesResponse
     */
    public function terminateWorkspaces(TerminateWorkspacesRequest $args)
    {
        $result = parent::terminateWorkspaces($args->toArray());
        return new TerminateWorkspacesResponse($result->toArray());
    }
}
