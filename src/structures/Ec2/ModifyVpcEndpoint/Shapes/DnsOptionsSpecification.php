<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpcEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ipv4'|'dualstack'|'ipv6'|'service-defined'|null $DnsRecordIpType
 * @property bool|null $PrivateDnsOnlyForInboundResolverEndpoint
 * @property string|null $PrivateDnsPreference
 * @property list<string>|null $PrivateDnsSpecifiedDomains
 */
class DnsOptionsSpecification extends Shape
{
    /**
     * @param array{
     *     DnsRecordIpType?: 'ipv4'|'dualstack'|'ipv6'|'service-defined'|null,
     *     PrivateDnsOnlyForInboundResolverEndpoint?: bool|null,
     *     PrivateDnsPreference?: string|null,
     *     PrivateDnsSpecifiedDomains?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
