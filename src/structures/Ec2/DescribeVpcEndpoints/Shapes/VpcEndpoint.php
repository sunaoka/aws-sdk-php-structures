<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VpcEndpointId
 * @property 'Interface'|'Gateway'|'GatewayLoadBalancer'|'Resource'|'ServiceNetwork'|null $VpcEndpointType
 * @property string|null $VpcId
 * @property string|null $ServiceName
 * @property 'PendingAcceptance'|'Pending'|'Available'|'Deleting'|'Deleted'|'Rejected'|'Failed'|'Expired'|'Partial'|null $State
 * @property string|null $PolicyDocument
 * @property list<string>|null $RouteTableIds
 * @property list<string>|null $SubnetIds
 * @property list<SecurityGroupIdentifier>|null $Groups
 * @property 'ipv4'|'dualstack'|'ipv6'|null $IpAddressType
 * @property DnsOptions|null $DnsOptions
 * @property bool|null $PrivateDnsEnabled
 * @property bool|null $RequesterManaged
 * @property list<string>|null $NetworkInterfaceIds
 * @property list<DnsEntry>|null $DnsEntries
 * @property \Aws\Api\DateTimeResult|null $CreationTimestamp
 * @property list<Tag>|null $Tags
 * @property string|null $OwnerId
 * @property LastError|null $LastError
 * @property list<SubnetIpPrefixes>|null $Ipv4Prefixes
 * @property list<SubnetIpPrefixes>|null $Ipv6Prefixes
 * @property string|null $FailureReason
 * @property string|null $ServiceNetworkArn
 * @property string|null $ResourceConfigurationArn
 * @property string|null $ServiceRegion
 */
class VpcEndpoint extends Shape
{
    /**
     * @param array{
     *     VpcEndpointId?: string|null,
     *     VpcEndpointType?: 'Interface'|'Gateway'|'GatewayLoadBalancer'|'Resource'|'ServiceNetwork'|null,
     *     VpcId?: string|null,
     *     ServiceName?: string|null,
     *     State?: 'PendingAcceptance'|'Pending'|'Available'|'Deleting'|'Deleted'|'Rejected'|'Failed'|'Expired'|'Partial'|null,
     *     PolicyDocument?: string|null,
     *     RouteTableIds?: list<string>|null,
     *     SubnetIds?: list<string>|null,
     *     Groups?: list<SecurityGroupIdentifier>|null,
     *     IpAddressType?: 'ipv4'|'dualstack'|'ipv6'|null,
     *     DnsOptions?: DnsOptions|null,
     *     PrivateDnsEnabled?: bool|null,
     *     RequesterManaged?: bool|null,
     *     NetworkInterfaceIds?: list<string>|null,
     *     DnsEntries?: list<DnsEntry>|null,
     *     CreationTimestamp?: \Aws\Api\DateTimeResult|null,
     *     Tags?: list<Tag>|null,
     *     OwnerId?: string|null,
     *     LastError?: LastError|null,
     *     Ipv4Prefixes?: list<SubnetIpPrefixes>|null,
     *     Ipv6Prefixes?: list<SubnetIpPrefixes>|null,
     *     FailureReason?: string|null,
     *     ServiceNetworkArn?: string|null,
     *     ResourceConfigurationArn?: string|null,
     *     ServiceRegion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
