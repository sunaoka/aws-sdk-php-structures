<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeDirectories;

trait DescribeDirectoriesTrait
{
    /**
     * @param DescribeDirectoriesRequest $args
     * @return DescribeDirectoriesResponse
     */
    public function describeDirectories(DescribeDirectoriesRequest $args)
    {
        $result = parent::describeDirectories($args->toArray());
        return new DescribeDirectoriesResponse($result->toArray());
    }
}
