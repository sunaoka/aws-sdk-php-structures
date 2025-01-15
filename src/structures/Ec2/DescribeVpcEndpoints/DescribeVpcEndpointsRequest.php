<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcEndpoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property list<string>|null $VpcEndpointIds
 * @property list<Shapes\Filter>|null $Filters
 * @property int|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeVpcEndpointsRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     VpcEndpointIds?: list<string>|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxResults?: int|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
