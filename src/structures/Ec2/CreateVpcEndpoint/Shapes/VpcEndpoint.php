<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpcEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VpcEndpointId
 * @property 'Interface'|'Gateway'|'GatewayLoadBalancer'|'Resource'|'ServiceNetwork' $VpcEndpointType
 * @property string $VpcId
 * @property string $ServiceName
 * @property 'PendingAcceptance'|'Pending'|'Available'|'Deleting'|'Deleted'|'Rejected'|'Failed'|'Expired'|'Partial' $State
 * @property string $PolicyDocument
 * @property list<string> $RouteTableIds
 * @property list<string> $SubnetIds
 * @property list<SecurityGroupIdentifier> $Groups
 * @property 'ipv4'|'dualstack'|'ipv6' $IpAddressType
 * @property DnsOptions $DnsOptions
 * @property bool $PrivateDnsEnabled
 * @property bool $RequesterManaged
 * @property list<string> $NetworkInterfaceIds
 * @property list<DnsEntry> $DnsEntries
 * @property \Aws\Api\DateTimeResult $CreationTimestamp
 * @property list<Tag> $Tags
 * @property string $OwnerId
 * @property LastError $LastError
 * @property list<SubnetIpPrefixes> $Ipv4Prefixes
 * @property list<SubnetIpPrefixes> $Ipv6Prefixes
 * @property string $FailureReason
 * @property string $ServiceNetworkArn
 * @property string $ResourceConfigurationArn
 * @property string $ServiceRegion
 */
class VpcEndpoint extends Shape
{
    /**
     * @param array{
     *     VpcEndpointId?: string,
     *     VpcEndpointType?: 'Interface'|'Gateway'|'GatewayLoadBalancer'|'Resource'|'ServiceNetwork',
     *     VpcId?: string,
     *     ServiceName?: string,
     *     State?: 'PendingAcceptance'|'Pending'|'Available'|'Deleting'|'Deleted'|'Rejected'|'Failed'|'Expired'|'Partial',
     *     PolicyDocument?: string,
     *     RouteTableIds?: list<string>,
     *     SubnetIds?: list<string>,
     *     Groups?: list<SecurityGroupIdentifier>,
     *     IpAddressType?: 'ipv4'|'dualstack'|'ipv6',
     *     DnsOptions?: DnsOptions,
     *     PrivateDnsEnabled?: bool,
     *     RequesterManaged?: bool,
     *     NetworkInterfaceIds?: list<string>,
     *     DnsEntries?: list<DnsEntry>,
     *     CreationTimestamp?: \Aws\Api\DateTimeResult,
     *     Tags?: list<Tag>,
     *     OwnerId?: string,
     *     LastError?: LastError,
     *     Ipv4Prefixes?: list<SubnetIpPrefixes>,
     *     Ipv6Prefixes?: list<SubnetIpPrefixes>,
     *     FailureReason?: string,
     *     ServiceNetworkArn?: string,
     *     ResourceConfigurationArn?: string,
     *     ServiceRegion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
