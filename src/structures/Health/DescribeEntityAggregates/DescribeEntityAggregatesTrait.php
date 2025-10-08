<?php

namespace Sunaoka\Aws\Structures\Health\DescribeEntityAggregates;

trait DescribeEntityAggregatesTrait
{
    /**
     * @param DescribeEntityAggregatesRequest $args
     * @return DescribeEntityAggregatesResponse
     */
    public function describeEntityAggregates(DescribeEntityAggregatesRequest $args)
    {
        $result = parent::describeEntityAggregates($args->toArray());
        return new DescribeEntityAggregatesResponse($result->toArray());
    }
}
