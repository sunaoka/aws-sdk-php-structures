<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAgentPermissions;

trait DescribeAgentPermissionsTrait
{
    /**
     * @param DescribeAgentPermissionsRequest $args
     * @return DescribeAgentPermissionsResponse
     */
    public function describeAgentPermissions(DescribeAgentPermissionsRequest $args)
    {
        $result = parent::describeAgentPermissions($args->toArray());
        return new DescribeAgentPermissionsResponse($result->toArray());
    }
}
