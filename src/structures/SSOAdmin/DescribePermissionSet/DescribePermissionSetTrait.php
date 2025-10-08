<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DescribePermissionSet;

trait DescribePermissionSetTrait
{
    /**
     * @param DescribePermissionSetRequest $args
     * @return DescribePermissionSetResponse
     */
    public function describePermissionSet(DescribePermissionSetRequest $args)
    {
        $result = parent::describePermissionSet($args->toArray());
        return new DescribePermissionSetResponse($result->toArray());
    }
}
