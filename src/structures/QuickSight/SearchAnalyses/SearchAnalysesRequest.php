<?php

namespace Sunaoka\Aws\Structures\QuickSight\SearchAnalyses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property list<Shapes\AnalysisSearchFilter> $Filters
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class SearchAnalysesRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     Filters: list<Shapes\AnalysisSearchFilter>,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
