<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkInterfacePermission\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'pending'|'granted'|'revoking'|'revoked' $State
 * @property string $StatusMessage
 */
class NetworkInterfacePermissionState extends Shape
{
    /**
     * @param array{
     *     State?: 'pending'|'granted'|'revoking'|'revoked',
     *     StatusMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
