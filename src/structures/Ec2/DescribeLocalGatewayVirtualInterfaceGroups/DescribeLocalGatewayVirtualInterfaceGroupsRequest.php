<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeLocalGatewayVirtualInterfaceGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $LocalGatewayVirtualInterfaceGroupIds
 * @property list<Shapes\Filter> $Filters
 * @property int<5, 1000> $MaxResults
 * @property string $NextToken
 * @property bool $DryRun
 */
class DescribeLocalGatewayVirtualInterfaceGroupsRequest extends Request
{
    /**
     * @param array{
     *     LocalGatewayVirtualInterfaceGroupIds?: list<string>,
     *     Filters?: list<Shapes\Filter>,
     *     MaxResults?: int<5, 1000>,
     *     NextToken?: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
