<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpcEndpointServiceConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ServiceTypeDetail> $ServiceType
 * @property string $ServiceId
 * @property string $ServiceName
 * @property 'Pending'|'Available'|'Deleting'|'Deleted'|'Failed' $ServiceState
 * @property list<string> $AvailabilityZones
 * @property bool $AcceptanceRequired
 * @property bool $ManagesVpcEndpoints
 * @property list<string> $NetworkLoadBalancerArns
 * @property list<string> $GatewayLoadBalancerArns
 * @property list<'ipv4'|'ipv6'> $SupportedIpAddressTypes
 * @property list<string> $BaseEndpointDnsNames
 * @property string $PrivateDnsName
 * @property PrivateDnsNameConfiguration $PrivateDnsNameConfiguration
 * @property 'ServiceOwner' $PayerResponsibility
 * @property list<Tag> $Tags
 * @property list<SupportedRegionDetail> $SupportedRegions
 * @property bool $RemoteAccessEnabled
 */
class ServiceConfiguration extends Shape
{
    /**
     * @param array{
     *     ServiceType?: list<ServiceTypeDetail>,
     *     ServiceId?: string,
     *     ServiceName?: string,
     *     ServiceState?: 'Pending'|'Available'|'Deleting'|'Deleted'|'Failed',
     *     AvailabilityZones?: list<string>,
     *     AcceptanceRequired?: bool,
     *     ManagesVpcEndpoints?: bool,
     *     NetworkLoadBalancerArns?: list<string>,
     *     GatewayLoadBalancerArns?: list<string>,
     *     SupportedIpAddressTypes?: list<'ipv4'|'ipv6'>,
     *     BaseEndpointDnsNames?: list<string>,
     *     PrivateDnsName?: string,
     *     PrivateDnsNameConfiguration?: PrivateDnsNameConfiguration,
     *     PayerResponsibility?: 'ServiceOwner',
     *     Tags?: list<Tag>,
     *     SupportedRegions?: list<SupportedRegionDetail>,
     *     RemoteAccessEnabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
