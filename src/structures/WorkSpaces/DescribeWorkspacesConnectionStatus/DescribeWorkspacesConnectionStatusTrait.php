<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspacesConnectionStatus;

trait DescribeWorkspacesConnectionStatusTrait
{
    /**
     * @param DescribeWorkspacesConnectionStatusRequest $args
     * @return DescribeWorkspacesConnectionStatusResponse
     */
    public function describeWorkspacesConnectionStatus(DescribeWorkspacesConnectionStatusRequest $args)
    {
        $result = parent::describeWorkspacesConnectionStatus($args->toArray());
        return new DescribeWorkspacesConnectionStatusResponse($result->toArray());
    }
}
