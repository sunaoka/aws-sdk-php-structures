<?php

namespace Sunaoka\Aws\Structures\QuickSight\SearchDataSets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property list<Shapes\DataSetSearchFilter> $Filters
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class SearchDataSetsRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     Filters: list<Shapes\DataSetSearchFilter>,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
