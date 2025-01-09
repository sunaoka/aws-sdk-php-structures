<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetCostForecast;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DateInterval $TimePeriod
 * @property 'BLENDED_COST'|'UNBLENDED_COST'|'AMORTIZED_COST'|'NET_UNBLENDED_COST'|'NET_AMORTIZED_COST'|'USAGE_QUANTITY'|'NORMALIZED_USAGE_AMOUNT' $Metric
 * @property 'DAILY'|'MONTHLY'|'HOURLY' $Granularity
 * @property Shapes\Expression $Filter
 * @property string $BillingViewArn
 * @property int<51, 99> $PredictionIntervalLevel
 */
class GetCostForecastRequest extends Request
{
    /**
     * @param array{
     *     TimePeriod: Shapes\DateInterval,
     *     Metric: 'BLENDED_COST'|'UNBLENDED_COST'|'AMORTIZED_COST'|'NET_UNBLENDED_COST'|'NET_AMORTIZED_COST'|'USAGE_QUANTITY'|'NORMALIZED_USAGE_AMOUNT',
     *     Granularity: 'DAILY'|'MONTHLY'|'HOURLY',
     *     Filter?: Shapes\Expression,
     *     BillingViewArn?: string,
     *     PredictionIntervalLevel?: int<51, 99>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
