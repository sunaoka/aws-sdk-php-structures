<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeDocumentPermission;

trait DescribeDocumentPermissionTrait
{
    /**
     * @param DescribeDocumentPermissionRequest $args
     * @return DescribeDocumentPermissionResponse
     */
    public function describeDocumentPermission(DescribeDocumentPermissionRequest $args)
    {
        $result = parent::describeDocumentPermission($args->toArray());
        return new DescribeDocumentPermissionResponse($result->toArray());
    }
}
