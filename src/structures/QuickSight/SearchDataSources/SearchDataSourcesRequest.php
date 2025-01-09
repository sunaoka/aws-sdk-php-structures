<?php

namespace Sunaoka\Aws\Structures\QuickSight\SearchDataSources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property list<Shapes\DataSourceSearchFilter> $Filters
 * @property string $NextToken
 * @property int $MaxResults
 */
class SearchDataSourcesRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     Filters: list<Shapes\DataSourceSearchFilter>,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
