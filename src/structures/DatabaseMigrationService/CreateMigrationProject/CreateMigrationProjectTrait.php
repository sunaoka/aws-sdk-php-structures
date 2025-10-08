<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\CreateMigrationProject;

trait CreateMigrationProjectTrait
{
    /**
     * @param CreateMigrationProjectRequest $args
     * @return CreateMigrationProjectResponse
     */
    public function createMigrationProject(CreateMigrationProjectRequest $args)
    {
        $result = parent::createMigrationProject($args->toArray());
        return new CreateMigrationProjectResponse($result->toArray());
    }
}
