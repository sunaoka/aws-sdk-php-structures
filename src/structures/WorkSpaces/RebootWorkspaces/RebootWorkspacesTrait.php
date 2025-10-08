<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\RebootWorkspaces;

trait RebootWorkspacesTrait
{
    /**
     * @param RebootWorkspacesRequest $args
     * @return RebootWorkspacesResponse
     */
    public function rebootWorkspaces(RebootWorkspacesRequest $args)
    {
        $result = parent::rebootWorkspaces($args->toArray());
        return new RebootWorkspacesResponse($result->toArray());
    }
}
