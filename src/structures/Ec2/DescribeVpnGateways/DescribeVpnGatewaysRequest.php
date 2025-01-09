<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpnGateways;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter> $Filters
 * @property list<string> $VpnGatewayIds
 * @property bool $DryRun
 */
class DescribeVpnGatewaysRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>,
     *     VpnGatewayIds?: list<string>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
