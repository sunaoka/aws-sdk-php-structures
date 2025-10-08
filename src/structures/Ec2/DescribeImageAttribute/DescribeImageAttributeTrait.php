<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeImageAttribute;

trait DescribeImageAttributeTrait
{
    /**
     * @param DescribeImageAttributeRequest $args
     * @return DescribeImageAttributeResponse
     */
    public function describeImageAttribute(DescribeImageAttributeRequest $args)
    {
        $result = parent::describeImageAttribute($args->toArray());
        return new DescribeImageAttributeResponse($result->toArray());
    }
}
