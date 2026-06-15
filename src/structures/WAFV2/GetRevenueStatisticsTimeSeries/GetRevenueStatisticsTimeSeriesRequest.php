<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetRevenueStatisticsTimeSeries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'DATE_HISTOGRAM'|'PAYMENT_TRAFFIC' $StatisticType
 * @property Shapes\TimeWindow $TimeWindow
 * @property 'CLOUDFRONT'|'REGIONAL' $Scope
 * @property 'MINUTELY'|'FIVE_MINUTELY'|'HOURLY'|'DAILY' $Interval
 * @property 'USDC' $Currency
 * @property 'NAME'|'CATEGORY'|'INTENT'|'ORGANIZATION'|'WEBACL'|null $GroupBy
 * @property list<Shapes\MonetizationFilter>|null $Filters
 * @property int<1, 10000>|null $Limit
 * @property string|null $NextMarker
 */
class GetRevenueStatisticsTimeSeriesRequest extends Request
{
    /**
     * @param array{
     *     StatisticType: 'DATE_HISTOGRAM'|'PAYMENT_TRAFFIC',
     *     TimeWindow: Shapes\TimeWindow,
     *     Scope: 'CLOUDFRONT'|'REGIONAL',
     *     Interval: 'MINUTELY'|'FIVE_MINUTELY'|'HOURLY'|'DAILY',
     *     Currency: 'USDC',
     *     GroupBy?: 'NAME'|'CATEGORY'|'INTENT'|'ORGANIZATION'|'WEBACL'|null,
     *     Filters?: list<Shapes\MonetizationFilter>|null,
     *     Limit?: int<1, 10000>|null,
     *     NextMarker?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
