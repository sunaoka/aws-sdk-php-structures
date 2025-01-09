<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetReservationUtilization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DateInterval $TimePeriod
 * @property list<Shapes\GroupDefinition> $GroupBy
 * @property 'DAILY'|'MONTHLY'|'HOURLY' $Granularity
 * @property Shapes\Expression $Filter
 * @property Shapes\SortDefinition $SortBy
 * @property string $NextPageToken
 * @property int $MaxResults
 */
class GetReservationUtilizationRequest extends Request
{
    /**
     * @param array{
     *     TimePeriod: Shapes\DateInterval,
     *     GroupBy?: list<Shapes\GroupDefinition>,
     *     Granularity?: 'DAILY'|'MONTHLY'|'HOURLY',
     *     Filter?: Shapes\Expression,
     *     SortBy?: Shapes\SortDefinition,
     *     NextPageToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
