<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcAttribute;

trait DescribeVpcAttributeTrait
{
    /**
     * @param DescribeVpcAttributeRequest $args
     * @return DescribeVpcAttributeResponse
     */
    public function describeVpcAttribute(DescribeVpcAttributeRequest $args)
    {
        $result = parent::describeVpcAttribute($args->toArray());
        return new DescribeVpcAttributeResponse($result->toArray());
    }
}
