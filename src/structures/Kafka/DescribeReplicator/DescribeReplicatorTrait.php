<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeReplicator;

trait DescribeReplicatorTrait
{
    /**
     * @param DescribeReplicatorRequest $args
     * @return DescribeReplicatorResponse
     */
    public function describeReplicator(DescribeReplicatorRequest $args)
    {
        $result = parent::describeReplicator($args->toArray());
        return new DescribeReplicatorResponse($result->toArray());
    }
}
