<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTopicPermissions;

trait DescribeTopicPermissionsTrait
{
    /**
     * @param DescribeTopicPermissionsRequest $args
     * @return DescribeTopicPermissionsResponse
     */
    public function describeTopicPermissions(DescribeTopicPermissionsRequest $args)
    {
        $result = parent::describeTopicPermissions($args->toArray());
        return new DescribeTopicPermissionsResponse($result->toArray());
    }
}
