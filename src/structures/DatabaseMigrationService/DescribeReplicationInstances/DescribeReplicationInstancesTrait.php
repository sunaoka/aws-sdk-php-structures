<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeReplicationInstances;

trait DescribeReplicationInstancesTrait
{
    /**
     * @param DescribeReplicationInstancesRequest $args
     * @return DescribeReplicationInstancesResponse
     */
    public function describeReplicationInstances(DescribeReplicationInstancesRequest $args)
    {
        $result = parent::describeReplicationInstances($args->toArray());
        return new DescribeReplicationInstancesResponse($result->toArray());
    }
}
