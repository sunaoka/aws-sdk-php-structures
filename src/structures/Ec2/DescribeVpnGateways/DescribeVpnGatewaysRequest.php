<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpnGateways;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter>|null $Filters
 * @property list<string>|null $VpnGatewayIds
 * @property bool|null $DryRun
 */
class DescribeVpnGatewaysRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>|null,
     *     VpnGatewayIds?: list<string>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
