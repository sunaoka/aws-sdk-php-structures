<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DescribeRootFolders;

trait DescribeRootFoldersTrait
{
    /**
     * @param DescribeRootFoldersRequest $args
     * @return DescribeRootFoldersResponse
     */
    public function describeRootFolders(DescribeRootFoldersRequest $args)
    {
        $result = parent::describeRootFolders($args->toArray());
        return new DescribeRootFoldersResponse($result->toArray());
    }
}
