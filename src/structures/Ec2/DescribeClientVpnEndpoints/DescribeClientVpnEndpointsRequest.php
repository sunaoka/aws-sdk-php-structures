<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeClientVpnEndpoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ClientVpnEndpointIds
 * @property int $MaxResults
 * @property string $NextToken
 * @property list<Shapes\Filter> $Filters
 * @property bool $DryRun
 */
class DescribeClientVpnEndpointsRequest extends Request
{
    /**
     * @param array{
     *     ClientVpnEndpointIds?: list<string>,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     Filters?: list<Shapes\Filter>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
