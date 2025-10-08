<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeTableReplicaAutoScaling;

trait DescribeTableReplicaAutoScalingTrait
{
    /**
     * @param DescribeTableReplicaAutoScalingRequest $args
     * @return DescribeTableReplicaAutoScalingResponse
     */
    public function describeTableReplicaAutoScaling(DescribeTableReplicaAutoScalingRequest $args)
    {
        $result = parent::describeTableReplicaAutoScaling($args->toArray());
        return new DescribeTableReplicaAutoScalingResponse($result->toArray());
    }
}
