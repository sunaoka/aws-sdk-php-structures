<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSetRefreshProperties;

trait DescribeDataSetRefreshPropertiesTrait
{
    /**
     * @param DescribeDataSetRefreshPropertiesRequest $args
     * @return DescribeDataSetRefreshPropertiesResponse
     */
    public function describeDataSetRefreshProperties(DescribeDataSetRefreshPropertiesRequest $args)
    {
        $result = parent::describeDataSetRefreshProperties($args->toArray());
        return new DescribeDataSetRefreshPropertiesResponse($result->toArray());
    }
}
