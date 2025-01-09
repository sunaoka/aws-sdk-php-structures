<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetSavingsPlansCoverage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DateInterval $TimePeriod
 * @property list<Shapes\GroupDefinition> $GroupBy
 * @property 'DAILY'|'MONTHLY'|'HOURLY' $Granularity
 * @property Shapes\Expression $Filter
 * @property list<string> $Metrics
 * @property string $NextToken
 * @property int<1, max> $MaxResults
 * @property Shapes\SortDefinition $SortBy
 */
class GetSavingsPlansCoverageRequest extends Request
{
    /**
     * @param array{
     *     TimePeriod: Shapes\DateInterval,
     *     GroupBy?: list<Shapes\GroupDefinition>,
     *     Granularity?: 'DAILY'|'MONTHLY'|'HOURLY',
     *     Filter?: Shapes\Expression,
     *     Metrics?: list<string>,
     *     NextToken?: string,
     *     MaxResults?: int<1, max>,
     *     SortBy?: Shapes\SortDefinition
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
