<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeQuery;

trait DescribeQueryTrait
{
    /**
     * @param DescribeQueryRequest $args
     * @return DescribeQueryResponse
     */
    public function describeQuery(DescribeQueryRequest $args)
    {
        $result = parent::describeQuery($args->toArray());
        return new DescribeQueryResponse($result->toArray());
    }
}
