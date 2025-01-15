<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetCostAndUsage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DateInterval $TimePeriod
 * @property 'DAILY'|'MONTHLY'|'HOURLY' $Granularity
 * @property Shapes\Expression|null $Filter
 * @property list<string> $Metrics
 * @property list<Shapes\GroupDefinition>|null $GroupBy
 * @property string|null $BillingViewArn
 * @property string|null $NextPageToken
 */
class GetCostAndUsageRequest extends Request
{
    /**
     * @param array{
     *     TimePeriod: Shapes\DateInterval,
     *     Granularity: 'DAILY'|'MONTHLY'|'HOURLY',
     *     Filter?: Shapes\Expression|null,
     *     Metrics: list<string>,
     *     GroupBy?: list<Shapes\GroupDefinition>|null,
     *     BillingViewArn?: string|null,
     *     NextPageToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
