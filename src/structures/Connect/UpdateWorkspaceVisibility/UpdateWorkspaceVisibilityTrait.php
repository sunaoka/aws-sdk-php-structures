<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateWorkspaceVisibility;

trait UpdateWorkspaceVisibilityTrait
{
    /**
     * @param UpdateWorkspaceVisibilityRequest $args
     * @return UpdateWorkspaceVisibilityResponse
     */
    public function updateWorkspaceVisibility(UpdateWorkspaceVisibilityRequest $args)
    {
        $result = parent::updateWorkspaceVisibility($args->toArray());
        return new UpdateWorkspaceVisibilityResponse($result->toArray());
    }
}
