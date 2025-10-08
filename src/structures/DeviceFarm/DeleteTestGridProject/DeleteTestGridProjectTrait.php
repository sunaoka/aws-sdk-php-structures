<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\DeleteTestGridProject;

trait DeleteTestGridProjectTrait
{
    /**
     * @param DeleteTestGridProjectRequest $args
     * @return DeleteTestGridProjectResponse
     */
    public function deleteTestGridProject(DeleteTestGridProjectRequest $args)
    {
        $result = parent::deleteTestGridProject($args->toArray());
        return new DeleteTestGridProjectResponse($result->toArray());
    }
}
