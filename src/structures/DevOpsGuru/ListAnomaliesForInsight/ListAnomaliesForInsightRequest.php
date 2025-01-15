<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\ListAnomaliesForInsight;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InsightId
 * @property Shapes\StartTimeRange|null $StartTimeRange
 * @property int<1, 500>|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $AccountId
 * @property Shapes\ListAnomaliesForInsightFilters|null $Filters
 */
class ListAnomaliesForInsightRequest extends Request
{
    /**
     * @param array{
     *     InsightId: string,
     *     StartTimeRange?: Shapes\StartTimeRange|null,
     *     MaxResults?: int<1, 500>|null,
     *     NextToken?: string|null,
     *     AccountId?: string|null,
     *     Filters?: Shapes\ListAnomaliesForInsightFilters|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
