<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetSavingsPlansCoverage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DateInterval $TimePeriod
 * @property list<Shapes\GroupDefinition>|null $GroupBy
 * @property 'DAILY'|'MONTHLY'|'HOURLY'|null $Granularity
 * @property Shapes\Expression|null $Filter
 * @property list<string>|null $Metrics
 * @property string|null $NextToken
 * @property int<1, max>|null $MaxResults
 * @property Shapes\SortDefinition|null $SortBy
 */
class GetSavingsPlansCoverageRequest extends Request
{
    /**
     * @param array{
     *     TimePeriod: Shapes\DateInterval,
     *     GroupBy?: list<Shapes\GroupDefinition>|null,
     *     Granularity?: 'DAILY'|'MONTHLY'|'HOURLY'|null,
     *     Filter?: Shapes\Expression|null,
     *     Metrics?: list<string>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, max>|null,
     *     SortBy?: Shapes\SortDefinition|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
