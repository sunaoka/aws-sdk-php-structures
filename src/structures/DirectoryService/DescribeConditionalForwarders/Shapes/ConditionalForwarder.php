<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeConditionalForwarders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RemoteDomainName
 * @property list<string>|null $DnsIpAddrs
 * @property list<string>|null $DnsIpv6Addrs
 * @property 'Domain'|null $ReplicationScope
 */
class ConditionalForwarder extends Shape
{
    /**
     * @param array{
     *     RemoteDomainName?: string|null,
     *     DnsIpAddrs?: list<string>|null,
     *     DnsIpv6Addrs?: list<string>|null,
     *     ReplicationScope?: 'Domain'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
