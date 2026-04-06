<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeRouteTables;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter>|null $Filters
 * @property bool|null $DryRun
 * @property list<string>|null $RouteTableIds
 * @property string|null $NextToken
 * @property int<5, 100>|null $MaxResults
 */
class DescribeRouteTablesRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\Filter>|null,
     *     DryRun?: bool|null,
     *     RouteTableIds?: list<string>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<5, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
