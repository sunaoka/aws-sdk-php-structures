<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\SearchInsights;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\StartTimeRange $StartTimeRange
 * @property Shapes\SearchInsightsFilters|null $Filters
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property 'REACTIVE'|'PROACTIVE' $Type
 */
class SearchInsightsRequest extends Request
{
    /**
     * @param array{
     *     StartTimeRange: Shapes\StartTimeRange,
     *     Filters?: Shapes\SearchInsightsFilters|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     Type: 'REACTIVE'|'PROACTIVE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
