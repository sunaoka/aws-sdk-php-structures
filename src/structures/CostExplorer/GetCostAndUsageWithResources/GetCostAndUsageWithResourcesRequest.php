<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetCostAndUsageWithResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DateInterval $TimePeriod
 * @property 'DAILY'|'MONTHLY'|'HOURLY' $Granularity
 * @property Shapes\Expression $Filter
 * @property list<string>|null $Metrics
 * @property list<Shapes\GroupDefinition>|null $GroupBy
 * @property string|null $BillingViewArn
 * @property string|null $NextPageToken
 */
class GetCostAndUsageWithResourcesRequest extends Request
{
    /**
     * @param array{
     *     TimePeriod: Shapes\DateInterval,
     *     Granularity: 'DAILY'|'MONTHLY'|'HOURLY',
     *     Filter: Shapes\Expression,
     *     Metrics?: list<string>|null,
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
