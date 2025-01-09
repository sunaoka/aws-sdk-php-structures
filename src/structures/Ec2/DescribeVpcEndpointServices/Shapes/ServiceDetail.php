<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcEndpointServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ServiceName
 * @property string $ServiceId
 * @property list<ServiceTypeDetail> $ServiceType
 * @property string $ServiceRegion
 * @property list<string> $AvailabilityZones
 * @property string $Owner
 * @property list<string> $BaseEndpointDnsNames
 * @property string $PrivateDnsName
 * @property list<PrivateDnsDetails> $PrivateDnsNames
 * @property bool $VpcEndpointPolicySupported
 * @property bool $AcceptanceRequired
 * @property bool $ManagesVpcEndpoints
 * @property 'ServiceOwner' $PayerResponsibility
 * @property list<Tag> $Tags
 * @property 'pendingVerification'|'verified'|'failed' $PrivateDnsNameVerificationState
 * @property list<'ipv4'|'ipv6'> $SupportedIpAddressTypes
 */
class ServiceDetail extends Shape
{
    /**
     * @param array{
     *     ServiceName?: string,
     *     ServiceId?: string,
     *     ServiceType?: list<ServiceTypeDetail>,
     *     ServiceRegion?: string,
     *     AvailabilityZones?: list<string>,
     *     Owner?: string,
     *     BaseEndpointDnsNames?: list<string>,
     *     PrivateDnsName?: string,
     *     PrivateDnsNames?: list<PrivateDnsDetails>,
     *     VpcEndpointPolicySupported?: bool,
     *     AcceptanceRequired?: bool,
     *     ManagesVpcEndpoints?: bool,
     *     PayerResponsibility?: 'ServiceOwner',
     *     Tags?: list<Tag>,
     *     PrivateDnsNameVerificationState?: 'pendingVerification'|'verified'|'failed',
     *     SupportedIpAddressTypes?: list<'ipv4'|'ipv6'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
