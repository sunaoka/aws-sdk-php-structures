<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcEndpointServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ServiceName
 * @property string|null $ServiceId
 * @property list<ServiceTypeDetail>|null $ServiceType
 * @property string|null $ServiceRegion
 * @property list<string>|null $AvailabilityZoneIds
 * @property list<string>|null $AvailabilityZones
 * @property string|null $Owner
 * @property list<string>|null $BaseEndpointDnsNames
 * @property string|null $PrivateDnsName
 * @property list<PrivateDnsDetails>|null $PrivateDnsNames
 * @property bool|null $VpcEndpointPolicySupported
 * @property bool|null $AcceptanceRequired
 * @property bool|null $ManagesVpcEndpoints
 * @property 'ServiceOwner'|null $PayerResponsibility
 * @property list<Tag>|null $Tags
 * @property 'pendingVerification'|'verified'|'failed'|null $PrivateDnsNameVerificationState
 * @property list<'ipv4'|'ipv6'>|null $SupportedIpAddressTypes
 */
class ServiceDetail extends Shape
{
    /**
     * @param array{
     *     ServiceName?: string|null,
     *     ServiceId?: string|null,
     *     ServiceType?: list<ServiceTypeDetail>|null,
     *     ServiceRegion?: string|null,
     *     AvailabilityZoneIds?: list<string>|null,
     *     AvailabilityZones?: list<string>|null,
     *     Owner?: string|null,
     *     BaseEndpointDnsNames?: list<string>|null,
     *     PrivateDnsName?: string|null,
     *     PrivateDnsNames?: list<PrivateDnsDetails>|null,
     *     VpcEndpointPolicySupported?: bool|null,
     *     AcceptanceRequired?: bool|null,
     *     ManagesVpcEndpoints?: bool|null,
     *     PayerResponsibility?: 'ServiceOwner'|null,
     *     Tags?: list<Tag>|null,
     *     PrivateDnsNameVerificationState?: 'pendingVerification'|'verified'|'failed'|null,
     *     SupportedIpAddressTypes?: list<'ipv4'|'ipv6'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
