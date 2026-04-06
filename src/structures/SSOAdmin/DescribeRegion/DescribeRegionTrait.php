<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DescribeRegion;

trait DescribeRegionTrait
{
    /**
     * @param DescribeRegionRequest $args
     * @return DescribeRegionResponse
     */
    public function describeRegion(DescribeRegionRequest $args)
    {
        $result = parent::describeRegion($args->toArray());
        return new DescribeRegionResponse($result->toArray());
    }
}
