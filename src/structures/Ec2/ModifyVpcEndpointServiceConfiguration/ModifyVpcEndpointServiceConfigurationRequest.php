<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpcEndpointServiceConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $ServiceId
 * @property string $PrivateDnsName
 * @property bool $RemovePrivateDnsName
 * @property bool $AcceptanceRequired
 * @property list<string> $AddNetworkLoadBalancerArns
 * @property list<string> $RemoveNetworkLoadBalancerArns
 * @property list<string> $AddGatewayLoadBalancerArns
 * @property list<string> $RemoveGatewayLoadBalancerArns
 * @property list<string> $AddSupportedIpAddressTypes
 * @property list<string> $RemoveSupportedIpAddressTypes
 * @property list<string> $AddSupportedRegions
 * @property list<string> $RemoveSupportedRegions
 */
class ModifyVpcEndpointServiceConfigurationRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     ServiceId: string,
     *     PrivateDnsName?: string,
     *     RemovePrivateDnsName?: bool,
     *     AcceptanceRequired?: bool,
     *     AddNetworkLoadBalancerArns?: list<string>,
     *     RemoveNetworkLoadBalancerArns?: list<string>,
     *     AddGatewayLoadBalancerArns?: list<string>,
     *     RemoveGatewayLoadBalancerArns?: list<string>,
     *     AddSupportedIpAddressTypes?: list<string>,
     *     RemoveSupportedIpAddressTypes?: list<string>,
     *     AddSupportedRegions?: list<string>,
     *     RemoveSupportedRegions?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
