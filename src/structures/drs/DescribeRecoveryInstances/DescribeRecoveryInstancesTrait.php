<?php

namespace Sunaoka\Aws\Structures\drs\DescribeRecoveryInstances;

trait DescribeRecoveryInstancesTrait
{
    /**
     * @param DescribeRecoveryInstancesRequest $args
     * @return DescribeRecoveryInstancesResponse
     */
    public function describeRecoveryInstances(DescribeRecoveryInstancesRequest $args)
    {
        $result = parent::describeRecoveryInstances($args->toArray());
        return new DescribeRecoveryInstancesResponse($result->toArray());
    }
}
