<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSource;

trait DescribeDataSourceTrait
{
    /**
     * @param DescribeDataSourceRequest $args
     * @return DescribeDataSourceResponse
     */
    public function describeDataSource(DescribeDataSourceRequest $args)
    {
        $result = parent::describeDataSource($args->toArray());
        return new DescribeDataSourceResponse($result->toArray());
    }
}
