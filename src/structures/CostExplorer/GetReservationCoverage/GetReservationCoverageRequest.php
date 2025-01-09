<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetReservationCoverage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DateInterval $TimePeriod
 * @property list<Shapes\GroupDefinition> $GroupBy
 * @property 'DAILY'|'MONTHLY'|'HOURLY' $Granularity
 * @property Shapes\Expression $Filter
 * @property list<string> $Metrics
 * @property string $NextPageToken
 * @property Shapes\SortDefinition $SortBy
 * @property int<1, max> $MaxResults
 */
class GetReservationCoverageRequest extends Request
{
    /**
     * @param array{
     *     TimePeriod: Shapes\DateInterval,
     *     GroupBy?: list<Shapes\GroupDefinition>,
     *     Granularity?: 'DAILY'|'MONTHLY'|'HOURLY',
     *     Filter?: Shapes\Expression,
     *     Metrics?: list<string>,
     *     NextPageToken?: string,
     *     SortBy?: Shapes\SortDefinition,
     *     MaxResults?: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
