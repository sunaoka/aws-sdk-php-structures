<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeSharedDirectories;

trait DescribeSharedDirectoriesTrait
{
    /**
     * @param DescribeSharedDirectoriesRequest $args
     * @return DescribeSharedDirectoriesResponse
     */
    public function describeSharedDirectories(DescribeSharedDirectoriesRequest $args)
    {
        $result = parent::describeSharedDirectories($args->toArray());
        return new DescribeSharedDirectoriesResponse($result->toArray());
    }
}
