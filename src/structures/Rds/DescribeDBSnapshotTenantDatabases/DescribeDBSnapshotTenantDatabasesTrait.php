<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBSnapshotTenantDatabases;

trait DescribeDBSnapshotTenantDatabasesTrait
{
    /**
     * @param DescribeDBSnapshotTenantDatabasesRequest $args
     * @return DescribeDBSnapshotTenantDatabasesResponse
     */
    public function describeDBSnapshotTenantDatabases(DescribeDBSnapshotTenantDatabasesRequest $args)
    {
        $result = parent::describeDBSnapshotTenantDatabases($args->toArray());
        return new DescribeDBSnapshotTenantDatabasesResponse($result->toArray());
    }
}
