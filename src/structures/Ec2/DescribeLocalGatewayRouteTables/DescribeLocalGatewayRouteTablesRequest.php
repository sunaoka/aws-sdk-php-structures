<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeLocalGatewayRouteTables;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $LocalGatewayRouteTableIds
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxResults
 * @property string $NextToken
 * @property bool $DryRun
 */
class DescribeLocalGatewayRouteTablesRequest extends Request
{
    /**
     * @param array{
     *     LocalGatewayRouteTableIds?: list<string>,
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
