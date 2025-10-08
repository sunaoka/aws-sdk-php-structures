<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\UpdateProject;

trait UpdateProjectTrait
{
    /**
     * @param UpdateProjectRequest $args
     * @return UpdateProjectResponse
     */
    public function updateProject(UpdateProjectRequest $args)
    {
        $result = parent::updateProject($args->toArray());
        return new UpdateProjectResponse($result->toArray());
    }
}
