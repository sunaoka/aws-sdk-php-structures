<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBLogFiles;

trait DescribeDBLogFilesTrait
{
    /**
     * @param DescribeDBLogFilesRequest $args
     * @return DescribeDBLogFilesResponse
     */
    public function describeDBLogFiles(DescribeDBLogFilesRequest $args)
    {
        $result = parent::describeDBLogFiles($args->toArray());
        return new DescribeDBLogFilesResponse($result->toArray());
    }
}
