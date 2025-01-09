<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpnConnections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter> $Filters
 * @property list<string> $VpnConnectionIds
 * @property bool $DryRun
 */
class DescribeVpnConnectionsRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>,
     *     VpnConnectionIds?: list<string>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
