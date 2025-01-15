<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpcEndpointServiceConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ServiceTypeDetail>|null $ServiceType
 * @property string|null $ServiceId
 * @property string|null $ServiceName
 * @property 'Pending'|'Available'|'Deleting'|'Deleted'|'Failed'|null $ServiceState
 * @property list<string>|null $AvailabilityZones
 * @property bool|null $AcceptanceRequired
 * @property bool|null $ManagesVpcEndpoints
 * @property list<string>|null $NetworkLoadBalancerArns
 * @property list<string>|null $GatewayLoadBalancerArns
 * @property list<'ipv4'|'ipv6'>|null $SupportedIpAddressTypes
 * @property list<string>|null $BaseEndpointDnsNames
 * @property string|null $PrivateDnsName
 * @property PrivateDnsNameConfiguration|null $PrivateDnsNameConfiguration
 * @property 'ServiceOwner'|null $PayerResponsibility
 * @property list<Tag>|null $Tags
 * @property list<SupportedRegionDetail>|null $SupportedRegions
 * @property bool|null $RemoteAccessEnabled
 */
class ServiceConfiguration extends Shape
{
    /**
     * @param array{
     *     ServiceType?: list<ServiceTypeDetail>|null,
     *     ServiceId?: string|null,
     *     ServiceName?: string|null,
     *     ServiceState?: 'Pending'|'Available'|'Deleting'|'Deleted'|'Failed'|null,
     *     AvailabilityZones?: list<string>|null,
     *     AcceptanceRequired?: bool|null,
     *     ManagesVpcEndpoints?: bool|null,
     *     NetworkLoadBalancerArns?: list<string>|null,
     *     GatewayLoadBalancerArns?: list<string>|null,
     *     SupportedIpAddressTypes?: list<'ipv4'|'ipv6'>|null,
     *     BaseEndpointDnsNames?: list<string>|null,
     *     PrivateDnsName?: string|null,
     *     PrivateDnsNameConfiguration?: PrivateDnsNameConfiguration|null,
     *     PayerResponsibility?: 'ServiceOwner'|null,
     *     Tags?: list<Tag>|null,
     *     SupportedRegions?: list<SupportedRegionDetail>|null,
     *     RemoteAccessEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
