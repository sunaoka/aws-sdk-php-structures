<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetUsageForecast;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DateInterval $TimePeriod
 * @property 'BLENDED_COST'|'UNBLENDED_COST'|'AMORTIZED_COST'|'NET_UNBLENDED_COST'|'NET_AMORTIZED_COST'|'USAGE_QUANTITY'|'NORMALIZED_USAGE_AMOUNT' $Metric
 * @property 'DAILY'|'MONTHLY'|'HOURLY' $Granularity
 * @property Shapes\Expression|null $Filter
 * @property string|null $BillingViewArn
 * @property int<51, 99>|null $PredictionIntervalLevel
 */
class GetUsageForecastRequest extends Request
{
    /**
     * @param array{
     *     TimePeriod: Shapes\DateInterval,
     *     Metric: 'BLENDED_COST'|'UNBLENDED_COST'|'AMORTIZED_COST'|'NET_UNBLENDED_COST'|'NET_AMORTIZED_COST'|'USAGE_QUANTITY'|'NORMALIZED_USAGE_AMOUNT',
     *     Granularity: 'DAILY'|'MONTHLY'|'HOURLY',
     *     Filter?: Shapes\Expression|null,
     *     BillingViewArn?: string|null,
     *     PredictionIntervalLevel?: int<51, 99>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
