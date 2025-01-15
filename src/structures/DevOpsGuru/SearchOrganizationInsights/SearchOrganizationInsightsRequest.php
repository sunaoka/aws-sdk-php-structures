<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\SearchOrganizationInsights;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $AccountIds
 * @property Shapes\StartTimeRange $StartTimeRange
 * @property Shapes\SearchOrganizationInsightsFilters|null $Filters
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property 'REACTIVE'|'PROACTIVE' $Type
 */
class SearchOrganizationInsightsRequest extends Request
{
    /**
     * @param array{
     *     AccountIds: list<string>,
     *     StartTimeRange: Shapes\StartTimeRange,
     *     Filters?: Shapes\SearchOrganizationInsightsFilters|null,
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
