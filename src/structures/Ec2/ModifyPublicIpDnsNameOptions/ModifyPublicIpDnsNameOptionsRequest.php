<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyPublicIpDnsNameOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NetworkInterfaceId
 * @property 'public-dual-stack-dns-name'|'public-ipv4-dns-name'|'public-ipv6-dns-name' $HostnameType
 * @property bool|null $DryRun
 */
class ModifyPublicIpDnsNameOptionsRequest extends Request
{
    /**
     * @param array{
     *     NetworkInterfaceId: string,
     *     HostnameType: 'public-dual-stack-dns-name'|'public-ipv4-dns-name'|'public-ipv6-dns-name',
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
