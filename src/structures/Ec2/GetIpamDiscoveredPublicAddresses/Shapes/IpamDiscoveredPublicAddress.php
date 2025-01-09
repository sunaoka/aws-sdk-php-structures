<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamDiscoveredPublicAddresses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IpamResourceDiscoveryId
 * @property string $AddressRegion
 * @property string $Address
 * @property string $AddressOwnerId
 * @property string $AddressAllocationId
 * @property 'associated'|'disassociated' $AssociationStatus
 * @property 'service-managed-ip'|'service-managed-byoip'|'amazon-owned-eip'|'amazon-owned-contig'|'byoip'|'ec2-public-ip' $AddressType
 * @property 'nat-gateway'|'database-migration-service'|'redshift'|'elastic-container-service'|'relational-database-service'|'site-to-site-vpn'|'load-balancer'|'global-accelerator'|'other' $Service
 * @property string $ServiceResource
 * @property string $VpcId
 * @property string $SubnetId
 * @property string $PublicIpv4PoolId
 * @property string $NetworkInterfaceId
 * @property string $NetworkInterfaceDescription
 * @property string $InstanceId
 * @property IpamPublicAddressTags $Tags
 * @property string $NetworkBorderGroup
 * @property list<IpamPublicAddressSecurityGroup> $SecurityGroups
 * @property \Aws\Api\DateTimeResult $SampleTime
 */
class IpamDiscoveredPublicAddress extends Shape
{
    /**
     * @param array{
     *     IpamResourceDiscoveryId?: string,
     *     AddressRegion?: string,
     *     Address?: string,
     *     AddressOwnerId?: string,
     *     AddressAllocationId?: string,
     *     AssociationStatus?: 'associated'|'disassociated',
     *     AddressType?: 'service-managed-ip'|'service-managed-byoip'|'amazon-owned-eip'|'amazon-owned-contig'|'byoip'|'ec2-public-ip',
     *     Service?: 'nat-gateway'|'database-migration-service'|'redshift'|'elastic-container-service'|'relational-database-service'|'site-to-site-vpn'|'load-balancer'|'global-accelerator'|'other',
     *     ServiceResource?: string,
     *     VpcId?: string,
     *     SubnetId?: string,
     *     PublicIpv4PoolId?: string,
     *     NetworkInterfaceId?: string,
     *     NetworkInterfaceDescription?: string,
     *     InstanceId?: string,
     *     Tags?: IpamPublicAddressTags,
     *     NetworkBorderGroup?: string,
     *     SecurityGroups?: list<IpamPublicAddressSecurityGroup>,
     *     SampleTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
