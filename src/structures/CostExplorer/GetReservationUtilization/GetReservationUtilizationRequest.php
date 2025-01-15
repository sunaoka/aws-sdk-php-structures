<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetReservationUtilization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DateInterval $TimePeriod
 * @property list<Shapes\GroupDefinition>|null $GroupBy
 * @property 'DAILY'|'MONTHLY'|'HOURLY'|null $Granularity
 * @property Shapes\Expression|null $Filter
 * @property Shapes\SortDefinition|null $SortBy
 * @property string|null $NextPageToken
 * @property int<1, max>|null $MaxResults
 */
class GetReservationUtilizationRequest extends Request
{
    /**
     * @param array{
     *     TimePeriod: Shapes\DateInterval,
     *     GroupBy?: list<Shapes\GroupDefinition>|null,
     *     Granularity?: 'DAILY'|'MONTHLY'|'HOURLY'|null,
     *     Filter?: Shapes\Expression|null,
     *     SortBy?: Shapes\SortDefinition|null,
     *     NextPageToken?: string|null,
     *     MaxResults?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
