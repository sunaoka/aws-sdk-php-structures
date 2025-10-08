<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyTenantDatabase;

trait ModifyTenantDatabaseTrait
{
    /**
     * @param ModifyTenantDatabaseRequest $args
     * @return ModifyTenantDatabaseResponse
     */
    public function modifyTenantDatabase(ModifyTenantDatabaseRequest $args)
    {
        $result = parent::modifyTenantDatabase($args->toArray());
        return new ModifyTenantDatabaseResponse($result->toArray());
    }
}
