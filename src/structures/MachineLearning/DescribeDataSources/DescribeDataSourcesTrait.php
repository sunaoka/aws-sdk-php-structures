<?php

namespace Sunaoka\Aws\Structures\MachineLearning\DescribeDataSources;

trait DescribeDataSourcesTrait
{
    /**
     * @param DescribeDataSourcesRequest $args
     * @return DescribeDataSourcesResponse
     */
    public function describeDataSources(DescribeDataSourcesRequest $args)
    {
        $result = parent::describeDataSources($args->toArray());
        return new DescribeDataSourcesResponse($result->toArray());
    }
}
