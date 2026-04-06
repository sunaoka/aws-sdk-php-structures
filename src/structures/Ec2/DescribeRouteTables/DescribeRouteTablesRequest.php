<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeRouteTables;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<5, 100>|null $MaxResults
 * @property bool|null $DryRun
 * @property list<string>|null $RouteTableIds
 * @property list<Shapes\Filter>|null $Filters
 */
class DescribeRouteTablesRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<5, 100>|null,
     *     DryRun?: bool|null,
     *     RouteTableIds?: list<string>|null,
     *     Filters?: list<Shapes\Filter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
