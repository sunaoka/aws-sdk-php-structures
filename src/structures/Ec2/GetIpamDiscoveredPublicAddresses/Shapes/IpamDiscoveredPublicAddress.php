<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamDiscoveredPublicAddresses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IpamResourceDiscoveryId
 * @property string|null $AddressRegion
 * @property string|null $Address
 * @property string|null $AddressOwnerId
 * @property string|null $AddressAllocationId
 * @property 'associated'|'disassociated'|null $AssociationStatus
 * @property 'service-managed-ip'|'service-managed-byoip'|'amazon-owned-eip'|'amazon-owned-contig'|'byoip'|'ec2-public-ip'|'anycast-ip-list-ip'|null $AddressType
 * @property 'nat-gateway'|'database-migration-service'|'redshift'|'elastic-container-service'|'relational-database-service'|'site-to-site-vpn'|'load-balancer'|'global-accelerator'|'cloudfront'|'other'|null $Service
 * @property string|null $ServiceResource
 * @property string|null $VpcId
 * @property string|null $SubnetId
 * @property string|null $PublicIpv4PoolId
 * @property string|null $NetworkInterfaceId
 * @property string|null $NetworkInterfaceDescription
 * @property string|null $InstanceId
 * @property IpamPublicAddressTags|null $Tags
 * @property string|null $NetworkBorderGroup
 * @property list<IpamPublicAddressSecurityGroup>|null $SecurityGroups
 * @property \Aws\Api\DateTimeResult|null $SampleTime
 */
class IpamDiscoveredPublicAddress extends Shape
{
    /**
     * @param array{
     *     IpamResourceDiscoveryId?: string|null,
     *     AddressRegion?: string|null,
     *     Address?: string|null,
     *     AddressOwnerId?: string|null,
     *     AddressAllocationId?: string|null,
     *     AssociationStatus?: 'associated'|'disassociated'|null,
     *     AddressType?: 'service-managed-ip'|'service-managed-byoip'|'amazon-owned-eip'|'amazon-owned-contig'|'byoip'|'ec2-public-ip'|'anycast-ip-list-ip'|null,
     *     Service?: 'nat-gateway'|'database-migration-service'|'redshift'|'elastic-container-service'|'relational-database-service'|'site-to-site-vpn'|'load-balancer'|'global-accelerator'|'cloudfront'|'other'|null,
     *     ServiceResource?: string|null,
     *     VpcId?: string|null,
     *     SubnetId?: string|null,
     *     PublicIpv4PoolId?: string|null,
     *     NetworkInterfaceId?: string|null,
     *     NetworkInterfaceDescription?: string|null,
     *     InstanceId?: string|null,
     *     Tags?: IpamPublicAddressTags|null,
     *     NetworkBorderGroup?: string|null,
     *     SecurityGroups?: list<IpamPublicAddressSecurityGroup>|null,
     *     SampleTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
