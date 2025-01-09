<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcEndpointConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ServiceId
 * @property string $VpcEndpointId
 * @property string $VpcEndpointOwner
 * @property 'PendingAcceptance'|'Pending'|'Available'|'Deleting'|'Deleted'|'Rejected'|'Failed'|'Expired'|'Partial' $VpcEndpointState
 * @property \Aws\Api\DateTimeResult $CreationTimestamp
 * @property list<DnsEntry> $DnsEntries
 * @property list<string> $NetworkLoadBalancerArns
 * @property list<string> $GatewayLoadBalancerArns
 * @property 'ipv4'|'dualstack'|'ipv6' $IpAddressType
 * @property string $VpcEndpointConnectionId
 * @property list<Tag> $Tags
 * @property string $VpcEndpointRegion
 */
class VpcEndpointConnection extends Shape
{
    /**
     * @param array{
     *     ServiceId?: string,
     *     VpcEndpointId?: string,
     *     VpcEndpointOwner?: string,
     *     VpcEndpointState?: 'PendingAcceptance'|'Pending'|'Available'|'Deleting'|'Deleted'|'Rejected'|'Failed'|'Expired'|'Partial',
     *     CreationTimestamp?: \Aws\Api\DateTimeResult,
     *     DnsEntries?: list<DnsEntry>,
     *     NetworkLoadBalancerArns?: list<string>,
     *     GatewayLoadBalancerArns?: list<string>,
     *     IpAddressType?: 'ipv4'|'dualstack'|'ipv6',
     *     VpcEndpointConnectionId?: string,
     *     Tags?: list<Tag>,
     *     VpcEndpointRegion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
