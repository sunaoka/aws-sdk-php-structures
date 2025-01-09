<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\SearchInsights;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\StartTimeRange $StartTimeRange
 * @property Shapes\SearchInsightsFilters $Filters
 * @property int $MaxResults
 * @property string $NextToken
 * @property 'REACTIVE'|'PROACTIVE' $Type
 */
class SearchInsightsRequest extends Request
{
    /**
     * @param array{
     *     StartTimeRange: Shapes\StartTimeRange,
     *     Filters?: Shapes\SearchInsightsFilters,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     Type: 'REACTIVE'|'PROACTIVE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
