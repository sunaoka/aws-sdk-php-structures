<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DeleteMigrationProject;

trait DeleteMigrationProjectTrait
{
    /**
     * @param DeleteMigrationProjectRequest $args
     * @return DeleteMigrationProjectResponse
     */
    public function deleteMigrationProject(DeleteMigrationProjectRequest $args)
    {
        $result = parent::deleteMigrationProject($args->toArray());
        return new DeleteMigrationProjectResponse($result->toArray());
    }
}
