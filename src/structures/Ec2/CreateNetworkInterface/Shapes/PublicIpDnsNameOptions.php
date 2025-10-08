<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkInterface\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DnsHostnameType
 * @property string|null $PublicIpv4DnsName
 * @property string|null $PublicIpv6DnsName
 * @property string|null $PublicDualStackDnsName
 */
class PublicIpDnsNameOptions extends Shape
{
    /**
     * @param array{
     *     DnsHostnameType?: string|null,
     *     PublicIpv4DnsName?: string|null,
     *     PublicIpv6DnsName?: string|null,
     *     PublicDualStackDnsName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
