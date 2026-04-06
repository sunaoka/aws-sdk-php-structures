<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\CreateProject;

trait CreateProjectTrait
{
    /**
     * @param CreateProjectRequest $args
     * @return CreateProjectResponse
     */
    public function createProject(CreateProjectRequest $args)
    {
        $result = parent::createProject($args->toArray());
        return new CreateProjectResponse($result->toArray());
    }
}
