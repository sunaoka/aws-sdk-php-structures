<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\DescribeScheduledQuery;

trait DescribeScheduledQueryTrait
{
    /**
     * @param DescribeScheduledQueryRequest $args
     * @return DescribeScheduledQueryResponse
     */
    public function describeScheduledQuery(DescribeScheduledQueryRequest $args)
    {
        $result = parent::describeScheduledQuery($args->toArray());
        return new DescribeScheduledQueryResponse($result->toArray());
    }
}
