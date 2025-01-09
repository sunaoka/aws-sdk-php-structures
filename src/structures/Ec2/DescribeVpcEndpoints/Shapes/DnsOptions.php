<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ipv4'|'dualstack'|'ipv6'|'service-defined' $DnsRecordIpType
 * @property bool $PrivateDnsOnlyForInboundResolverEndpoint
 */
class DnsOptions extends Shape
{
    /**
     * @param array{
     *     DnsRecordIpType?: 'ipv4'|'dualstack'|'ipv6'|'service-defined',
     *     PrivateDnsOnlyForInboundResolverEndpoint?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
