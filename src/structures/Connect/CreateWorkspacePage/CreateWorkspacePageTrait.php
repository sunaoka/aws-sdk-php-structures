<?php

namespace Sunaoka\Aws\Structures\Connect\CreateWorkspacePage;

trait CreateWorkspacePageTrait
{
    /**
     * @param CreateWorkspacePageRequest $args
     * @return CreateWorkspacePageResponse
     */
    public function createWorkspacePage(CreateWorkspacePageRequest $args)
    {
        $result = parent::createWorkspacePage($args->toArray());
        return new CreateWorkspacePageResponse($result->toArray());
    }
}
