<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeLocalGatewayRouteTableVpcAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $LocalGatewayRouteTableVpcAssociationIds
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxResults
 * @property string $NextToken
 * @property bool $DryRun
 */
class DescribeLocalGatewayRouteTableVpcAssociationsRequest extends Request
{
    /**
     * @param array{
     *     LocalGatewayRouteTableVpcAssociationIds?: list<string>,
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
