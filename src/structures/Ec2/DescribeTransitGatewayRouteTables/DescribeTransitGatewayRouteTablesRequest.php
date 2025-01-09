<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTransitGatewayRouteTables;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $TransitGatewayRouteTableIds
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxResults
 * @property string $NextToken
 * @property bool $DryRun
 */
class DescribeTransitGatewayRouteTablesRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayRouteTableIds?: list<string>,
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
