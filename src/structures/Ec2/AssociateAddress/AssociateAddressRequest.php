<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateAddress;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AllocationId
 * @property string|null $InstanceId
 * @property string|null $PublicIp
 * @property bool|null $DryRun
 * @property string|null $NetworkInterfaceId
 * @property string|null $PrivateIpAddress
 * @property bool|null $AllowReassociation
 */
class AssociateAddressRequest extends Request
{
    /**
     * @param array{
     *     AllocationId?: string|null,
     *     InstanceId?: string|null,
     *     PublicIp?: string|null,
     *     DryRun?: bool|null,
     *     NetworkInterfaceId?: string|null,
     *     PrivateIpAddress?: string|null,
     *     AllowReassociation?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
