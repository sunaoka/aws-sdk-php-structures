<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetProject;

trait GetProjectTrait
{
    /**
     * @param GetProjectRequest $args
     * @return GetProjectResponse
     */
    public function getProject(GetProjectRequest $args)
    {
        $result = parent::getProject($args->toArray());
        return new GetProjectResponse($result->toArray());
    }
}
