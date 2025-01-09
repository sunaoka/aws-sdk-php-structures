<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceConnectEndpoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property int $MaxResults
 * @property string $NextToken
 * @property list<Shapes\Filter> $Filters
 * @property list<string> $InstanceConnectEndpointIds
 */
class DescribeInstanceConnectEndpointsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     Filters?: list<Shapes\Filter>,
     *     InstanceConnectEndpointIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
