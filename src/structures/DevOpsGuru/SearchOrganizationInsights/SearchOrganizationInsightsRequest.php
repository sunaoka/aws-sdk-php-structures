<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\SearchOrganizationInsights;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $AccountIds
 * @property Shapes\StartTimeRange $StartTimeRange
 * @property Shapes\SearchOrganizationInsightsFilters $Filters
 * @property int $MaxResults
 * @property string $NextToken
 * @property 'REACTIVE'|'PROACTIVE' $Type
 */
class SearchOrganizationInsightsRequest extends Request
{
    /**
     * @param array{
     *     AccountIds: list<string>,
     *     StartTimeRange: Shapes\StartTimeRange,
     *     Filters?: Shapes\SearchOrganizationInsightsFilters,
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
