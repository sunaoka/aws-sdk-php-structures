<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DescribePermissionSetProvisioningStatus;

trait DescribePermissionSetProvisioningStatusTrait
{
    /**
     * @param DescribePermissionSetProvisioningStatusRequest $args
     * @return DescribePermissionSetProvisioningStatusResponse
     */
    public function describePermissionSetProvisioningStatus(DescribePermissionSetProvisioningStatusRequest $args)
    {
        $result = parent::describePermissionSetProvisioningStatus($args->toArray());
        return new DescribePermissionSetProvisioningStatusResponse($result->toArray());
    }
}
