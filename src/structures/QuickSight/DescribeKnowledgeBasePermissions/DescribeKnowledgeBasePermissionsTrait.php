<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeKnowledgeBasePermissions;

trait DescribeKnowledgeBasePermissionsTrait
{
    /**
     * @param DescribeKnowledgeBasePermissionsRequest $args
     * @return DescribeKnowledgeBasePermissionsResponse
     */
    public function describeKnowledgeBasePermissions(DescribeKnowledgeBasePermissionsRequest $args)
    {
        $result = parent::describeKnowledgeBasePermissions($args->toArray());
        return new DescribeKnowledgeBasePermissionsResponse($result->toArray());
    }
}
