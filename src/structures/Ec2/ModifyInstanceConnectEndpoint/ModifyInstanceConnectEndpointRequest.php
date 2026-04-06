<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyInstanceConnectEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $InstanceConnectEndpointId
 * @property 'ipv4'|'dualstack'|'ipv6'|null $IpAddressType
 * @property list<string>|null $SecurityGroupIds
 * @property bool|null $PreserveClientIp
 */
class ModifyInstanceConnectEndpointRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     InstanceConnectEndpointId: string,
     *     IpAddressType?: 'ipv4'|'dualstack'|'ipv6'|null,
     *     SecurityGroupIds?: list<string>|null,
     *     PreserveClientIp?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
