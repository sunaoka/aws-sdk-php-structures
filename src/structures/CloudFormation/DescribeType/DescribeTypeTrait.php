<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeType;

trait DescribeTypeTrait
{
    /**
     * @param DescribeTypeRequest $args
     * @return DescribeTypeResponse
     */
    public function describeType(DescribeTypeRequest $args)
    {
        $result = parent::describeType($args->toArray());
        return new DescribeTypeResponse($result->toArray());
    }
}
