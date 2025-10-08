<?php

namespace Sunaoka\Aws\Structures\CodeBuild\UpdateProjectVisibility;

trait UpdateProjectVisibilityTrait
{
    /**
     * @param UpdateProjectVisibilityRequest $args
     * @return UpdateProjectVisibilityResponse
     */
    public function updateProjectVisibility(UpdateProjectVisibilityRequest $args)
    {
        $result = parent::updateProjectVisibility($args->toArray());
        return new UpdateProjectVisibilityResponse($result->toArray());
    }
}
