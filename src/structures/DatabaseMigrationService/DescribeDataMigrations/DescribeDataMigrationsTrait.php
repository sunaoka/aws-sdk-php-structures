<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeDataMigrations;

trait DescribeDataMigrationsTrait
{
    /**
     * @param DescribeDataMigrationsRequest $args
     * @return DescribeDataMigrationsResponse
     */
    public function describeDataMigrations(DescribeDataMigrationsRequest $args)
    {
        $result = parent::describeDataMigrations($args->toArray());
        return new DescribeDataMigrationsResponse($result->toArray());
    }
}
