<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyClientVpnEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $CustomDnsServers
 * @property bool $Enabled
 */
class DnsServersOptionsModifyStructure extends Shape
{
    /**
     * @param array{
     *     CustomDnsServers?: list<string>,
     *     Enabled?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
