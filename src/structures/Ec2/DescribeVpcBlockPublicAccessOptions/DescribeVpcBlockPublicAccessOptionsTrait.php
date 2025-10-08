<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcBlockPublicAccessOptions;

trait DescribeVpcBlockPublicAccessOptionsTrait
{
    /**
     * @param DescribeVpcBlockPublicAccessOptionsRequest $args
     * @return DescribeVpcBlockPublicAccessOptionsResponse
     */
    public function describeVpcBlockPublicAccessOptions(DescribeVpcBlockPublicAccessOptionsRequest $args)
    {
        $result = parent::describeVpcBlockPublicAccessOptions($args->toArray());
        return new DescribeVpcBlockPublicAccessOptionsResponse($result->toArray());
    }
}
