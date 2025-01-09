<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeLocalGatewayVirtualInterfaces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $LocalGatewayVirtualInterfaceIds
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxResults
 * @property string $NextToken
 * @property bool $DryRun
 */
class DescribeLocalGatewayVirtualInterfacesRequest extends Request
{
    /**
     * @param array{
     *     LocalGatewayVirtualInterfaceIds?: list<string>,
     *     Filters?: list<Shapes\Filter>,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
