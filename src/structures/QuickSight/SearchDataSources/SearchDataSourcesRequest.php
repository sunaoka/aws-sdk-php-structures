<?php

namespace Sunaoka\Aws\Structures\QuickSight\SearchDataSources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property list<Shapes\DataSourceSearchFilter> $Filters
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class SearchDataSourcesRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     Filters: list<Shapes\DataSourceSearchFilter>,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
