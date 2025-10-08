<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DeleteProject;

trait DeleteProjectTrait
{
    /**
     * @param DeleteProjectRequest $args
     * @return DeleteProjectResponse
     */
    public function deleteProject(DeleteProjectRequest $args)
    {
        $result = parent::deleteProject($args->toArray());
        return new DeleteProjectResponse($result->toArray());
    }
}
