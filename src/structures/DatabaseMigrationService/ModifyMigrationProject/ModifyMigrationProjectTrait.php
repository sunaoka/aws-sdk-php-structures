<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\ModifyMigrationProject;

trait ModifyMigrationProjectTrait
{
    /**
     * @param ModifyMigrationProjectRequest $args
     * @return ModifyMigrationProjectResponse
     */
    public function modifyMigrationProject(ModifyMigrationProjectRequest $args)
    {
        $result = parent::modifyMigrationProject($args->toArray());
        return new ModifyMigrationProjectResponse($result->toArray());
    }
}
