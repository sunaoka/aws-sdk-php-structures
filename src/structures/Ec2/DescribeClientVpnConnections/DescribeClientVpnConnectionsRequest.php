<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeClientVpnConnections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientVpnEndpointId
 * @property list<Shapes\Filter> $Filters
 * @property string $NextToken
 * @property int<5, 1000> $MaxResults
 * @property bool $DryRun
 */
class DescribeClientVpnConnectionsRequest extends Request
{
    /**
     * @param array{
     *     ClientVpnEndpointId: string,
     *     Filters?: list<Shapes\Filter>,
     *     NextToken?: string,
     *     MaxResults?: int<5, 1000>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
