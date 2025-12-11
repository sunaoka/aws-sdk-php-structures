<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeDataTableAttribute;

trait DescribeDataTableAttributeTrait
{
    /**
     * @param DescribeDataTableAttributeRequest $args
     * @return DescribeDataTableAttributeResponse
     */
    public function describeDataTableAttribute(DescribeDataTableAttributeRequest $args)
    {
        $result = parent::describeDataTableAttribute($args->toArray());
        return new DescribeDataTableAttributeResponse($result->toArray());
    }
}
