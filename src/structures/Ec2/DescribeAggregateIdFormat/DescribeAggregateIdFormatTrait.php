<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeAggregateIdFormat;

trait DescribeAggregateIdFormatTrait
{
    /**
     * @param DescribeAggregateIdFormatRequest $args
     * @return DescribeAggregateIdFormatResponse
     */
    public function describeAggregateIdFormat(DescribeAggregateIdFormatRequest $args)
    {
        $result = parent::describeAggregateIdFormat($args->toArray());
        return new DescribeAggregateIdFormatResponse($result->toArray());
    }
}
