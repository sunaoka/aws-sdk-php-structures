<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetCostAndUsage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DateInterval $TimePeriod
 * @property 'DAILY'|'MONTHLY'|'HOURLY' $Granularity
 * @property Shapes\Expression $Filter
 * @property list<string> $Metrics
 * @property list<Shapes\GroupDefinition> $GroupBy
 * @property string $BillingViewArn
 * @property string $NextPageToken
 */
class GetCostAndUsageRequest extends Request
{
    /**
     * @param array{
     *     TimePeriod: Shapes\DateInterval,
     *     Granularity: 'DAILY'|'MONTHLY'|'HOURLY',
     *     Filter?: Shapes\Expression,
     *     Metrics: list<string>,
     *     GroupBy?: list<Shapes\GroupDefinition>,
     *     BillingViewArn?: string,
     *     NextPageToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
