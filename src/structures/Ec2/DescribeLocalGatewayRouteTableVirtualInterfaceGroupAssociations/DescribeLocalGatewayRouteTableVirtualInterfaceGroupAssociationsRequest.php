<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeLocalGatewayRouteTableVirtualInterfaceGroupAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $LocalGatewayRouteTableVirtualInterfaceGroupAssociationIds
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxResults
 * @property string $NextToken
 * @property bool $DryRun
 */
class DescribeLocalGatewayRouteTableVirtualInterfaceGroupAssociationsRequest extends Request
{
    /**
     * @param array{
     *     LocalGatewayRouteTableVirtualInterfaceGroupAssociationIds?: list<string>,
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
