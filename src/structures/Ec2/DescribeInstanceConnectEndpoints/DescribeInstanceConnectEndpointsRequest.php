<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceConnectEndpoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 * @property list<Shapes\Filter>|null $Filters
 * @property list<string>|null $InstanceConnectEndpointIds
 */
class DescribeInstanceConnectEndpointsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     InstanceConnectEndpointIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
