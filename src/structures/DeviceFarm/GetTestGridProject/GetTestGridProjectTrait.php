<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetTestGridProject;

trait GetTestGridProjectTrait
{
    /**
     * @param GetTestGridProjectRequest $args
     * @return GetTestGridProjectResponse
     */
    public function getTestGridProject(GetTestGridProjectRequest $args)
    {
        $result = parent::getTestGridProject($args->toArray());
        return new GetTestGridProjectResponse($result->toArray());
    }
}
