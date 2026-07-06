<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\ListMigrations;

trait ListMigrationsTrait
{
    /**
     * @param ListMigrationsRequest $args
     * @return ListMigrationsResponse
     */
    public function listMigrations(ListMigrationsRequest $args)
    {
        $result = parent::listMigrations($args->toArray());
        return new ListMigrationsResponse($result->toArray());
    }
}
