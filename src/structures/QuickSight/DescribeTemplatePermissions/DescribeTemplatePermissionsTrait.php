<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplatePermissions;

trait DescribeTemplatePermissionsTrait
{
    /**
     * @param DescribeTemplatePermissionsRequest $args
     * @return DescribeTemplatePermissionsResponse
     */
    public function describeTemplatePermissions(DescribeTemplatePermissionsRequest $args)
    {
        $result = parent::describeTemplatePermissions($args->toArray());
        return new DescribeTemplatePermissionsResponse($result->toArray());
    }
}
