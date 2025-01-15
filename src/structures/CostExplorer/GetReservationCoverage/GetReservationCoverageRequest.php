<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetReservationCoverage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DateInterval $TimePeriod
 * @property list<Shapes\GroupDefinition>|null $GroupBy
 * @property 'DAILY'|'MONTHLY'|'HOURLY'|null $Granularity
 * @property Shapes\Expression|null $Filter
 * @property list<string>|null $Metrics
 * @property string|null $NextPageToken
 * @property Shapes\SortDefinition|null $SortBy
 * @property int<1, max>|null $MaxResults
 */
class GetReservationCoverageRequest extends Request
{
    /**
     * @param array{
     *     TimePeriod: Shapes\DateInterval,
     *     GroupBy?: list<Shapes\GroupDefinition>|null,
     *     Granularity?: 'DAILY'|'MONTHLY'|'HOURLY'|null,
     *     Filter?: Shapes\Expression|null,
     *     Metrics?: list<string>|null,
     *     NextPageToken?: string|null,
     *     SortBy?: Shapes\SortDefinition|null,
     *     MaxResults?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
