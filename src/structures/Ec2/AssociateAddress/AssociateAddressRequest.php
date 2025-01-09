<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateAddress;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AllocationId
 * @property string $InstanceId
 * @property string $PublicIp
 * @property bool $DryRun
 * @property string $NetworkInterfaceId
 * @property string $PrivateIpAddress
 * @property bool $AllowReassociation
 */
class AssociateAddressRequest extends Request
{
    /**
     * @param array{
     *     AllocationId?: string,
     *     InstanceId?: string,
     *     PublicIp?: string,
     *     DryRun?: bool,
     *     NetworkInterfaceId?: string,
     *     PrivateIpAddress?: string,
     *     AllowReassociation?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
