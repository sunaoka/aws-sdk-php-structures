<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBEngineVersions;

trait DescribeDBEngineVersionsTrait
{
    /**
     * @param DescribeDBEngineVersionsRequest $args
     * @return DescribeDBEngineVersionsResponse
     */
    public function describeDBEngineVersions(DescribeDBEngineVersionsRequest $args)
    {
        $result = parent::describeDBEngineVersions($args->toArray());
        return new DescribeDBEngineVersionsResponse($result->toArray());
    }
}
