<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeDirectories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DirectoryId
 * @property string|null $AccountId
 * @property list<string>|null $DnsIpAddrs
 * @property list<string>|null $DnsIpv6Addrs
 * @property DirectoryVpcSettingsDescription|null $VpcSettings
 * @property RadiusSettings|null $RadiusSettings
 * @property 'Creating'|'Completed'|'Failed'|null $RadiusStatus
 * @property 'Dual-stack'|'IPv4'|'IPv6'|null $NetworkType
 */
class OwnerDirectoryDescription extends Shape
{
    /**
     * @param array{
     *     DirectoryId?: string|null,
     *     AccountId?: string|null,
     *     DnsIpAddrs?: list<string>|null,
     *     DnsIpv6Addrs?: list<string>|null,
     *     VpcSettings?: DirectoryVpcSettingsDescription|null,
     *     RadiusSettings?: RadiusSettings|null,
     *     RadiusStatus?: 'Creating'|'Completed'|'Failed'|null,
     *     NetworkType?: 'Dual-stack'|'IPv4'|'IPv6'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
