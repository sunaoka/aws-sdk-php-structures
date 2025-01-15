<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyClientVpnEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $CustomDnsServers
 * @property bool|null $Enabled
 */
class DnsServersOptionsModifyStructure extends Shape
{
    /**
     * @param array{
     *     CustomDnsServers?: list<string>|null,
     *     Enabled?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
