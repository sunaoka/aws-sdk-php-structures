<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetCostComparisonDrivers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $BillingViewArn
 * @property Shapes\DateInterval $BaselineTimePeriod
 * @property Shapes\DateInterval $ComparisonTimePeriod
 * @property string $MetricForComparison
 * @property Shapes\Expression|null $Filter
 * @property list<Shapes\GroupDefinition>|null $GroupBy
 * @property int<1, 10>|null $MaxResults
 * @property string|null $NextPageToken
 */
class GetCostComparisonDriversRequest extends Request
{
    /**
     * @param array{
     *     BillingViewArn?: string|null,
     *     BaselineTimePeriod: Shapes\DateInterval,
     *     ComparisonTimePeriod: Shapes\DateInterval,
     *     MetricForComparison: string,
     *     Filter?: Shapes\Expression|null,
     *     GroupBy?: list<Shapes\GroupDefinition>|null,
     *     MaxResults?: int<1, 10>|null,
     *     NextPageToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
