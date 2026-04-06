<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspacesPools;

trait DescribeWorkspacesPoolsTrait
{
    /**
     * @param DescribeWorkspacesPoolsRequest $args
     * @return DescribeWorkspacesPoolsResponse
     */
    public function describeWorkspacesPools(DescribeWorkspacesPoolsRequest $args)
    {
        $result = parent::describeWorkspacesPools($args->toArray());
        return new DescribeWorkspacesPoolsResponse($result->toArray());
    }
}
