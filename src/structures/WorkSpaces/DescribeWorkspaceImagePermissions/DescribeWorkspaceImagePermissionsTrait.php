<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeWorkspaceImagePermissions;

trait DescribeWorkspaceImagePermissionsTrait
{
    /**
     * @param DescribeWorkspaceImagePermissionsRequest $args
     * @return DescribeWorkspaceImagePermissionsResponse
     */
    public function describeWorkspaceImagePermissions(DescribeWorkspaceImagePermissionsRequest $args)
    {
        $result = parent::describeWorkspaceImagePermissions($args->toArray());
        return new DescribeWorkspaceImagePermissionsResponse($result->toArray());
    }
}
