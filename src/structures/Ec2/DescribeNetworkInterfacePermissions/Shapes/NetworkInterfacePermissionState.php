<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInterfacePermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'pending'|'granted'|'revoking'|'revoked'|null $State
 * @property string|null $StatusMessage
 */
class NetworkInterfacePermissionState extends Shape
{
    /**
     * @param array{
     *     State?: 'pending'|'granted'|'revoking'|'revoked'|null,
     *     StatusMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
