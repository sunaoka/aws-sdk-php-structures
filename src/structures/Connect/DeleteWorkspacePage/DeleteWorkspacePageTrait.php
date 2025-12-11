<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteWorkspacePage;

trait DeleteWorkspacePageTrait
{
    /**
     * @param DeleteWorkspacePageRequest $args
     * @return DeleteWorkspacePageResponse
     */
    public function deleteWorkspacePage(DeleteWorkspacePageRequest $args)
    {
        $result = parent::deleteWorkspacePage($args->toArray());
        return new DeleteWorkspacePageResponse($result->toArray());
    }
}
