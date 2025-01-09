<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeRouteTables;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<5, 100> $MaxResults
 * @property bool $DryRun
 * @property list<string> $RouteTableIds
 * @property list<Shapes\Filter> $Filters
 */
class DescribeRouteTablesRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int<5, 100>,
     *     DryRun?: bool,
     *     RouteTableIds?: list<string>,
     *     Filters?: list<Shapes\Filter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
