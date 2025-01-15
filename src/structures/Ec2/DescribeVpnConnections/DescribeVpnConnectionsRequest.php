<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpnConnections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter>|null $Filters
 * @property list<string>|null $VpnConnectionIds
 * @property bool|null $DryRun
 */
class DescribeVpnConnectionsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>|null,
     *     VpnConnectionIds?: list<string>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
