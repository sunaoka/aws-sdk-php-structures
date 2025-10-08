<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspaces;

trait DescribeWorkspacesTrait
{
    /**
     * @param DescribeWorkspacesRequest $args
     * @return DescribeWorkspacesResponse
     */
    public function describeWorkspaces(DescribeWorkspacesRequest $args)
    {
        $result = parent::describeWorkspaces($args->toArray());
        return new DescribeWorkspacesResponse($result->toArray());
    }
}
