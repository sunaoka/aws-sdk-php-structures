<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeClusterV2;

trait DescribeClusterV2Trait
{
    /**
     * @param DescribeClusterV2Request $args
     * @return DescribeClusterV2Response
     */
    public function describeClusterV2(DescribeClusterV2Request $args)
    {
        $result = parent::describeClusterV2($args->toArray());
        return new DescribeClusterV2Response($result->toArray());
    }
}
