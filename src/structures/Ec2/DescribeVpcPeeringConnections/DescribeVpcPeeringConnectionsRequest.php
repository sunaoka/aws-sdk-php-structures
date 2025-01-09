<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcPeeringConnections;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $MaxResults
 * @property bool $DryRun
 * @property list<string> $VpcPeeringConnectionIds
 * @property list<Shapes\Filter> $Filters
 */
class DescribeVpcPeeringConnectionsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int,
     *     DryRun?: bool,
     *     VpcPeeringConnectionIds?: list<string>,
     *     Filters?: list<Shapes\Filter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
