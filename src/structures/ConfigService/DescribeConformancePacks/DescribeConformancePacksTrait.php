<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConformancePacks;

trait DescribeConformancePacksTrait
{
    /**
     * @param DescribeConformancePacksRequest $args
     * @return DescribeConformancePacksResponse
     */
    public function describeConformancePacks(DescribeConformancePacksRequest $args)
    {
        $result = parent::describeConformancePacks($args->toArray());
        return new DescribeConformancePacksResponse($result->toArray());
    }
}
