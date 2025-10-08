<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisPermissions;

trait DescribeAnalysisPermissionsTrait
{
    /**
     * @param DescribeAnalysisPermissionsRequest $args
     * @return DescribeAnalysisPermissionsResponse
     */
    public function describeAnalysisPermissions(DescribeAnalysisPermissionsRequest $args)
    {
        $result = parent::describeAnalysisPermissions($args->toArray());
        return new DescribeAnalysisPermissionsResponse($result->toArray());
    }
}
