<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateWorkspacePage;

trait UpdateWorkspacePageTrait
{
    /**
     * @param UpdateWorkspacePageRequest $args
     * @return UpdateWorkspacePageResponse
     */
    public function updateWorkspacePage(UpdateWorkspacePageRequest $args)
    {
        $result = parent::updateWorkspacePage($args->toArray());
        return new UpdateWorkspacePageResponse($result->toArray());
    }
}
