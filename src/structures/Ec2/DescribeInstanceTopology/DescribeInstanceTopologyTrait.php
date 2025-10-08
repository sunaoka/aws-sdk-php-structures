<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceTopology;

trait DescribeInstanceTopologyTrait
{
    /**
     * @param DescribeInstanceTopologyRequest $args
     * @return DescribeInstanceTopologyResponse
     */
    public function describeInstanceTopology(DescribeInstanceTopologyRequest $args)
    {
        $result = parent::describeInstanceTopology($args->toArray());
        return new DescribeInstanceTopologyResponse($result->toArray());
    }
}
