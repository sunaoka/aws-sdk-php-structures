<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetRevenueStatistics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'TOP_SOURCES_BY_REVENUE'|'TOP_PATHS_BY_REVENUE' $StatisticType
 * @property Shapes\TimeWindow $TimeWindow
 * @property 'CLOUDFRONT'|'REGIONAL' $Scope
 * @property 'USDC' $Currency
 * @property 'NAME'|'CATEGORY'|'INTENT'|'ORGANIZATION'|'WEBACL'|null $GroupBy
 * @property list<Shapes\MonetizationFilter>|null $Filters
 * @property string|null $NextMarker
 * @property int<1, 100>|null $Limit
 * @property 'REVENUE'|'PERCENTAGE'|'NAME'|null $SortBy
 * @property 'ASC'|'DESC'|null $SortOrder
 */
class GetRevenueStatisticsRequest extends Request
{
    /**
     * @param array{
     *     StatisticType: 'TOP_SOURCES_BY_REVENUE'|'TOP_PATHS_BY_REVENUE',
     *     TimeWindow: Shapes\TimeWindow,
     *     Scope: 'CLOUDFRONT'|'REGIONAL',
     *     Currency: 'USDC',
     *     GroupBy?: 'NAME'|'CATEGORY'|'INTENT'|'ORGANIZATION'|'WEBACL'|null,
     *     Filters?: list<Shapes\MonetizationFilter>|null,
     *     NextMarker?: string|null,
     *     Limit?: int<1, 100>|null,
     *     SortBy?: 'REVENUE'|'PERCENTAGE'|'NAME'|null,
     *     SortOrder?: 'ASC'|'DESC'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
