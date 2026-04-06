<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeDirectoryDataAccess;

trait DescribeDirectoryDataAccessTrait
{
    /**
     * @param DescribeDirectoryDataAccessRequest $args
     * @return DescribeDirectoryDataAccessResponse
     */
    public function describeDirectoryDataAccess(DescribeDirectoryDataAccessRequest $args)
    {
        $result = parent::describeDirectoryDataAccess($args->toArray());
        return new DescribeDirectoryDataAccessResponse($result->toArray());
    }
}
