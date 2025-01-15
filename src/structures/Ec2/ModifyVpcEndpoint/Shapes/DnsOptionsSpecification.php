<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpcEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ipv4'|'dualstack'|'ipv6'|'service-defined'|null $DnsRecordIpType
 * @property bool|null $PrivateDnsOnlyForInboundResolverEndpoint
 */
class DnsOptionsSpecification extends Shape
{
    /**
     * @param array{
     *     DnsRecordIpType?: 'ipv4'|'dualstack'|'ipv6'|'service-defined'|null,
     *     PrivateDnsOnlyForInboundResolverEndpoint?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
