<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEventAggregates;

trait DescribeEventAggregatesTrait
{
    /**
     * @param DescribeEventAggregatesRequest $args
     * @return DescribeEventAggregatesResponse
     */
    public function describeEventAggregates(DescribeEventAggregatesRequest $args)
    {
        $result = parent::describeEventAggregates($args->toArray());
        return new DescribeEventAggregatesResponse($result->toArray());
    }
}
