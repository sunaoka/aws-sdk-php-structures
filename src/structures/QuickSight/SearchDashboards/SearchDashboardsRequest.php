<?php

namespace Sunaoka\Aws\Structures\QuickSight\SearchDashboards;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property list<Shapes\DashboardSearchFilter> $Filters
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class SearchDashboardsRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     Filters: list<Shapes\DashboardSearchFilter>,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
