<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspaceDirectories;

trait DescribeWorkspaceDirectoriesTrait
{
    /**
     * @param DescribeWorkspaceDirectoriesRequest $args
     * @return DescribeWorkspaceDirectoriesResponse
     */
    public function describeWorkspaceDirectories(DescribeWorkspaceDirectoriesRequest $args)
    {
        $result = parent::describeWorkspaceDirectories($args->toArray());
        return new DescribeWorkspaceDirectoriesResponse($result->toArray());
    }
}
