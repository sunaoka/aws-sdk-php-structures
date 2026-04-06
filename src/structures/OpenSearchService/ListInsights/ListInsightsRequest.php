<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\ListInsights;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\InsightEntity $Entity
 * @property Shapes\InsightTimeRange|null $TimeRange
 * @property 'ASC'|'DESC'|null $SortOrder
 * @property int<1, 500>|null $MaxResults
 * @property string|null $NextToken
 */
class ListInsightsRequest extends Request
{
    /**
     * @param array{
     *     Entity: Shapes\InsightEntity,
     *     TimeRange?: Shapes\InsightTimeRange|null,
     *     SortOrder?: 'ASC'|'DESC'|null,
     *     MaxResults?: int<1, 500>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
