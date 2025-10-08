<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeInstanceAttribute;

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
