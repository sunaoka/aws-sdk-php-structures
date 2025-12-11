<?php

namespace Sunaoka\Aws\Structures\Connect\ListWorkspacePages;

trait ListWorkspacePagesTrait
{
    /**
     * @param ListWorkspacePagesRequest $args
     * @return ListWorkspacePagesResponse
     */
    public function listWorkspacePages(ListWorkspacePagesRequest $args)
    {
        $result = parent::listWorkspacePages($args->toArray());
        return new ListWorkspacePagesResponse($result->toArray());
    }
}
