<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeReplications;

trait DescribeReplicationsTrait
{
    /**
     * @param DescribeReplicationsRequest $args
     * @return DescribeReplicationsResponse
     */
    public function describeReplications(DescribeReplicationsRequest $args)
    {
        $result = parent::describeReplications($args->toArray());
        return new DescribeReplicationsResponse($result->toArray());
    }
}
