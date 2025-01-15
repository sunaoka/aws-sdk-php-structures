<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcEndpointConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ServiceId
 * @property string|null $VpcEndpointId
 * @property string|null $VpcEndpointOwner
 * @property 'PendingAcceptance'|'Pending'|'Available'|'Deleting'|'Deleted'|'Rejected'|'Failed'|'Expired'|'Partial'|null $VpcEndpointState
 * @property \Aws\Api\DateTimeResult|null $CreationTimestamp
 * @property list<DnsEntry>|null $DnsEntries
 * @property list<string>|null $NetworkLoadBalancerArns
 * @property list<string>|null $GatewayLoadBalancerArns
 * @property 'ipv4'|'dualstack'|'ipv6'|null $IpAddressType
 * @property string|null $VpcEndpointConnectionId
 * @property list<Tag>|null $Tags
 * @property string|null $VpcEndpointRegion
 */
class VpcEndpointConnection extends Shape
{
    /**
     * @param array{
     *     ServiceId?: string|null,
     *     VpcEndpointId?: string|null,
     *     VpcEndpointOwner?: string|null,
     *     VpcEndpointState?: 'PendingAcceptance'|'Pending'|'Available'|'Deleting'|'Deleted'|'Rejected'|'Failed'|'Expired'|'Partial'|null,
     *     CreationTimestamp?: \Aws\Api\DateTimeResult|null,
     *     DnsEntries?: list<DnsEntry>|null,
     *     NetworkLoadBalancerArns?: list<string>|null,
     *     GatewayLoadBalancerArns?: list<string>|null,
     *     IpAddressType?: 'ipv4'|'dualstack'|'ipv6'|null,
     *     VpcEndpointConnectionId?: string|null,
     *     Tags?: list<Tag>|null,
     *     VpcEndpointRegion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
