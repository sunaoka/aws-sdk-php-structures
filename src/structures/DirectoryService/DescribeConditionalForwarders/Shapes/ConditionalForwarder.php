<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DescribeConditionalForwarders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RemoteDomainName
 * @property list<string> $DnsIpAddrs
 * @property 'Domain' $ReplicationScope
 */
class ConditionalForwarder extends Shape
{
    /**
     * @param array{
     *     RemoteDomainName?: string,
     *     DnsIpAddrs?: list<string>,
     *     ReplicationScope?: 'Domain'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
