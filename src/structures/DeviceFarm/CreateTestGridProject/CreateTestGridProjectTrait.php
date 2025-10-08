<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\CreateTestGridProject;

trait CreateTestGridProjectTrait
{
    /**
     * @param CreateTestGridProjectRequest $args
     * @return CreateTestGridProjectResponse
     */
    public function createTestGridProject(CreateTestGridProjectRequest $args)
    {
        $result = parent::createTestGridProject($args->toArray());
        return new CreateTestGridProjectResponse($result->toArray());
    }
}
