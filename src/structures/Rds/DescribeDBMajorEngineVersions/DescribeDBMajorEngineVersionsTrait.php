<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBMajorEngineVersions;

trait DescribeDBMajorEngineVersionsTrait
{
    /**
     * @param DescribeDBMajorEngineVersionsRequest $args
     * @return DescribeDBMajorEngineVersionsResponse
     */
    public function describeDBMajorEngineVersions(DescribeDBMajorEngineVersionsRequest $args)
    {
        $result = parent::describeDBMajorEngineVersions($args->toArray());
        return new DescribeDBMajorEngineVersionsResponse($result->toArray());
    }
}
