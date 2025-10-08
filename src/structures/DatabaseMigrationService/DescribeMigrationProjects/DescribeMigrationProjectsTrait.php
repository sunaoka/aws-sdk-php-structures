<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeMigrationProjects;

trait DescribeMigrationProjectsTrait
{
    /**
     * @param DescribeMigrationProjectsRequest $args
     * @return DescribeMigrationProjectsResponse
     */
    public function describeMigrationProjects(DescribeMigrationProjectsRequest $args)
    {
        $result = parent::describeMigrationProjects($args->toArray());
        return new DescribeMigrationProjectsResponse($result->toArray());
    }
}
