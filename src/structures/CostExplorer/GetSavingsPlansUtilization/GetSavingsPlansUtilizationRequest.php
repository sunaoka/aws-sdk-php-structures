<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetSavingsPlansUtilization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\DateInterval $TimePeriod
 * @property 'DAILY'|'MONTHLY'|'HOURLY'|null $Granularity
 * @property Shapes\Expression|null $Filter
 * @property Shapes\SortDefinition|null $SortBy
 */
class GetSavingsPlansUtilizationRequest extends Request
{
    /**
     * @param array{
     *     TimePeriod: Shapes\DateInterval,
     *     Granularity?: 'DAILY'|'MONTHLY'|'HOURLY'|null,
     *     Filter?: Shapes\Expression|null,
     *     SortBy?: Shapes\SortDefinition|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
