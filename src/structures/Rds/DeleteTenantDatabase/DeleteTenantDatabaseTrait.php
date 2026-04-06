<?php

namespace Sunaoka\Aws\Structures\Rds\DeleteTenantDatabase;

trait DeleteTenantDatabaseTrait
{
    /**
     * @param DeleteTenantDatabaseRequest $args
     * @return DeleteTenantDatabaseResponse
     */
    public function deleteTenantDatabase(DeleteTenantDatabaseRequest $args)
    {
        $result = parent::deleteTenantDatabase($args->toArray());
        return new DeleteTenantDatabaseResponse($result->toArray());
    }
}
