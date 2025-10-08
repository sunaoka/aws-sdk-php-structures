<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeClusterOperationV2;

trait DescribeClusterOperationV2Trait
{
    /**
     * @param DescribeClusterOperationV2Request $args
     * @return DescribeClusterOperationV2Response
     */
    public function describeClusterOperationV2(DescribeClusterOperationV2Request $args)
    {
        $result = parent::describeClusterOperationV2($args->toArray());
        return new DescribeClusterOperationV2Response($result->toArray());
    }
}
