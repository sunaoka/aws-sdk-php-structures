<?php

namespace Sunaoka\Aws\Structures\S3Tables\ListTableMigrations;

trait ListTableMigrationsTrait
{
    /**
     * @param ListTableMigrationsRequest $args
     * @return ListTableMigrationsResponse
     */
    public function listTableMigrations(ListTableMigrationsRequest $args)
    {
        $result = parent::listTableMigrations($args->toArray());
        return new ListTableMigrationsResponse($result->toArray());
    }
}
