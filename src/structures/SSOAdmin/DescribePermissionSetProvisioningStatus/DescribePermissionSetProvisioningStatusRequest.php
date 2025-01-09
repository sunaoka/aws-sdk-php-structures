<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\DescribePermissionSetProvisioningStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceArn
 * @property string $ProvisionPermissionSetRequestId
 */
class DescribePermissionSetProvisioningStatusRequest extends Request
{
    /**
     * @param array{
     *     InstanceArn: string,
     *     ProvisionPermissionSetRequestId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
