<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeOrderableReplicationInstances;

trait DescribeOrderableReplicationInstancesTrait
{
    /**
     * @param DescribeOrderableReplicationInstancesRequest $args
     * @return DescribeOrderableReplicationInstancesResponse
     */
    public function describeOrderableReplicationInstances(DescribeOrderableReplicationInstancesRequest $args)
    {
        $result = parent::describeOrderableReplicationInstances($args->toArray());
        return new DescribeOrderableReplicationInstancesResponse($result->toArray());
    }
}
