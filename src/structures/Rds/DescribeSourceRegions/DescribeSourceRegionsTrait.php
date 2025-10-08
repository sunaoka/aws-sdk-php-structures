<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeSourceRegions;

trait DescribeSourceRegionsTrait
{
    /**
     * @param DescribeSourceRegionsRequest $args
     * @return DescribeSourceRegionsResponse
     */
    public function describeSourceRegions(DescribeSourceRegionsRequest $args)
    {
        $result = parent::describeSourceRegions($args->toArray());
        return new DescribeSourceRegionsResponse($result->toArray());
    }
}
