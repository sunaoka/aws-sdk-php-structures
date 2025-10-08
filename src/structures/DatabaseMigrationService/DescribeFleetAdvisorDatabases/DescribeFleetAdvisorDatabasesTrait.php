<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeFleetAdvisorDatabases;

trait DescribeFleetAdvisorDatabasesTrait
{
    /**
     * @param DescribeFleetAdvisorDatabasesRequest $args
     * @return DescribeFleetAdvisorDatabasesResponse
     */
    public function describeFleetAdvisorDatabases(DescribeFleetAdvisorDatabasesRequest $args)
    {
        $result = parent::describeFleetAdvisorDatabases($args->toArray());
        return new DescribeFleetAdvisorDatabasesResponse($result->toArray());
    }
}
