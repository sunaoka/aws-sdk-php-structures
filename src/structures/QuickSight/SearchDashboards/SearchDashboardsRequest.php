<?php

namespace Sunaoka\Aws\Structures\QuickSight\SearchDashboards;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property list<Shapes\DashboardSearchFilter> $Filters
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class SearchDashboardsRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     Filters: list<Shapes\DashboardSearchFilter>,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
