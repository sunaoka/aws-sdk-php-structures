<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpcEndpointServiceConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $ServiceId
 * @property string|null $PrivateDnsName
 * @property bool|null $RemovePrivateDnsName
 * @property bool|null $AcceptanceRequired
 * @property list<string>|null $AddNetworkLoadBalancerArns
 * @property list<string>|null $RemoveNetworkLoadBalancerArns
 * @property list<string>|null $AddGatewayLoadBalancerArns
 * @property list<string>|null $RemoveGatewayLoadBalancerArns
 * @property list<string>|null $AddSupportedIpAddressTypes
 * @property list<string>|null $RemoveSupportedIpAddressTypes
 * @property list<string>|null $AddSupportedRegions
 * @property list<string>|null $RemoveSupportedRegions
 */
class ModifyVpcEndpointServiceConfigurationRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     ServiceId: string,
     *     PrivateDnsName?: string|null,
     *     RemovePrivateDnsName?: bool|null,
     *     AcceptanceRequired?: bool|null,
     *     AddNetworkLoadBalancerArns?: list<string>|null,
     *     RemoveNetworkLoadBalancerArns?: list<string>|null,
     *     AddGatewayLoadBalancerArns?: list<string>|null,
     *     RemoveGatewayLoadBalancerArns?: list<string>|null,
     *     AddSupportedIpAddressTypes?: list<string>|null,
     *     RemoveSupportedIpAddressTypes?: list<string>|null,
     *     AddSupportedRegions?: list<string>|null,
     *     RemoveSupportedRegions?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
