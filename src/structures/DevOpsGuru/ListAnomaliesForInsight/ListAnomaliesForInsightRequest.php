<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListAnomaliesForInsight;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InsightId
 * @property Shapes\StartTimeRange $StartTimeRange
 * @property int<1, 500> $MaxResults
 * @property string $NextToken
 * @property string $AccountId
 * @property Shapes\ListAnomaliesForInsightFilters $Filters
 */
class ListAnomaliesForInsightRequest extends Request
{
    /**
     * @param array{
     *     InsightId: string,
     *     StartTimeRange?: Shapes\StartTimeRange,
     *     MaxResults?: int<1, 500>,
     *     NextToken?: string,
     *     AccountId?: string,
     *     Filters?: Shapes\ListAnomaliesForInsightFilters
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
