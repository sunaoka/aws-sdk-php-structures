<?php

namespace Sunaoka\Aws\Structures\Connect\SearchWorkspaces;

trait SearchWorkspacesTrait
{
    /**
     * @param SearchWorkspacesRequest $args
     * @return SearchWorkspacesResponse
     */
    public function searchWorkspaces(SearchWorkspacesRequest $args)
    {
        $result = parent::searchWorkspaces($args->toArray());
        return new SearchWorkspacesResponse($result->toArray());
    }
}
