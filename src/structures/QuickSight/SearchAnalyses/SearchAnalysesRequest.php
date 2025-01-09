<?php

namespace Sunaoka\Aws\Structures\QuickSight\SearchAnalyses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property list<Shapes\AnalysisSearchFilter> $Filters
 * @property string $NextToken
 * @property int $MaxResults
 */
class SearchAnalysesRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     Filters: list<Shapes\AnalysisSearchFilter>,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
