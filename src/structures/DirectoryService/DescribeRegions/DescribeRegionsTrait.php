<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeRegions;

trait DescribeRegionsTrait
{
    /**
     * @param DescribeRegionsRequest $args
     * @return DescribeRegionsResponse
     */
    public function describeRegions(DescribeRegionsRequest $args)
    {
        $result = parent::describeRegions($args->toArray());
        return new DescribeRegionsResponse($result->toArray());
    }
}
