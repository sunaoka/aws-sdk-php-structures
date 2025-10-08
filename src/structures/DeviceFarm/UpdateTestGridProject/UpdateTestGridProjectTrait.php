<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\UpdateTestGridProject;

trait UpdateTestGridProjectTrait
{
    /**
     * @param UpdateTestGridProjectRequest $args
     * @return UpdateTestGridProjectResponse
     */
    public function updateTestGridProject(UpdateTestGridProjectRequest $args)
    {
        $result = parent::updateTestGridProject($args->toArray());
        return new UpdateTestGridProjectResponse($result->toArray());
    }
}
