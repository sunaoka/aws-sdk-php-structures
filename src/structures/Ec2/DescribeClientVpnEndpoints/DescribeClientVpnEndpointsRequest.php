<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeClientVpnEndpoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $ClientVpnEndpointIds
 * @property int<5, 1000>|null $MaxResults
 * @property string|null $NextToken
 * @property list<Shapes\Filter>|null $Filters
 * @property bool|null $DryRun
 */
class DescribeClientVpnEndpointsRequest extends Request
{
    /**
     * @param array{
     *     ClientVpnEndpointIds?: list<string>|null,
     *     MaxResults?: int<5, 1000>|null,
     *     NextToken?: string|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
