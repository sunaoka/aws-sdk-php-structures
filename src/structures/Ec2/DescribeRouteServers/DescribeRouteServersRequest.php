<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeRouteServers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $RouteServerIds
 * @property string|null $NextToken
 * @property int<5, 1000>|null $MaxResults
 * @property list<Shapes\Filter>|null $Filters
 * @property bool|null $DryRun
 */
class DescribeRouteServersRequest extends Request
{
    /**
     * @param array{
     *     RouteServerIds?: list<string>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<5, 1000>|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
