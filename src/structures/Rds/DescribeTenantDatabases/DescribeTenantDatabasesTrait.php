<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeTenantDatabases;

trait DescribeTenantDatabasesTrait
{
    /**
     * @param DescribeTenantDatabasesRequest $args
     * @return DescribeTenantDatabasesResponse
     */
    public function describeTenantDatabases(DescribeTenantDatabasesRequest $args)
    {
        $result = parent::describeTenantDatabases($args->toArray());
        return new DescribeTenantDatabasesResponse($result->toArray());
    }
}
