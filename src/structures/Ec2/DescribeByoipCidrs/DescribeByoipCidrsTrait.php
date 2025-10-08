<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeByoipCidrs;

trait DescribeByoipCidrsTrait
{
    /**
     * @param DescribeByoipCidrsRequest $args
     * @return DescribeByoipCidrsResponse
     */
    public function describeByoipCidrs(DescribeByoipCidrsRequest $args)
    {
        $result = parent::describeByoipCidrs($args->toArray());
        return new DescribeByoipCidrsResponse($result->toArray());
    }
}
