<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeClusterOperation;

trait DescribeClusterOperationTrait
{
    /**
     * @param DescribeClusterOperationRequest $args
     * @return DescribeClusterOperationResponse
     */
    public function describeClusterOperation(DescribeClusterOperationRequest $args)
    {
        $result = parent::describeClusterOperation($args->toArray());
        return new DescribeClusterOperationResponse($result->toArray());
    }
}
