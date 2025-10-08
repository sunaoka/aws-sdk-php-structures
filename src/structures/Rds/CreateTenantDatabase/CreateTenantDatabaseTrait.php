<?php

namespace Sunaoka\Aws\Structures\Rds\CreateTenantDatabase;

trait CreateTenantDatabaseTrait
{
    /**
     * @param CreateTenantDatabaseRequest $args
     * @return CreateTenantDatabaseResponse
     */
    public function createTenantDatabase(CreateTenantDatabaseRequest $args)
    {
        $result = parent::createTenantDatabase($args->toArray());
        return new CreateTenantDatabaseResponse($result->toArray());
    }
}
