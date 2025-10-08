<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeKeyPairs;

trait DescribeKeyPairsTrait
{
    /**
     * @param DescribeKeyPairsRequest $args
     * @return DescribeKeyPairsResponse
     */
    public function describeKeyPairs(DescribeKeyPairsRequest $args)
    {
        $result = parent::describeKeyPairs($args->toArray());
        return new DescribeKeyPairsResponse($result->toArray());
    }
}
