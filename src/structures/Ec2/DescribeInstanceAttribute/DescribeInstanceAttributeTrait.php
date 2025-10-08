<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceAttribute;

trait DescribeInstanceAttributeTrait
{
    /**
     * @param DescribeInstanceAttributeRequest $args
     * @return DescribeInstanceAttributeResponse
     */
    public function describeInstanceAttribute(DescribeInstanceAttributeRequest $args)
    {
        $result = parent::describeInstanceAttribute($args->toArray());
        return new DescribeInstanceAttributeResponse($result->toArray());
    }
}
