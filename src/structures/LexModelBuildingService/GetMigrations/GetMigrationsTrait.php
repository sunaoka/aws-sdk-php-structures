<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetMigrations;

trait GetMigrationsTrait
{
    /**
     * @param GetMigrationsRequest $args
     * @return GetMigrationsResponse
     */
    public function getMigrations(GetMigrationsRequest $args)
    {
        $result = parent::getMigrations($args->toArray());
        return new GetMigrationsResponse($result->toArray());
    }
}
