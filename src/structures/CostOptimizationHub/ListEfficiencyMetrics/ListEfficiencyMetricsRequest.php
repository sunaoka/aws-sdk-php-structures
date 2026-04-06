<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\ListEfficiencyMetrics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $groupBy
 * @property 'Daily'|'Monthly' $granularity
 * @property Shapes\TimePeriod $timePeriod
 * @property int<0, 100>|null $maxResults
 * @property Shapes\OrderBy|null $orderBy
 * @property string|null $nextToken
 */
class ListEfficiencyMetricsRequest extends Request
{
    /**
     * @param array{
     *     groupBy?: string|null,
     *     granularity: 'Daily'|'Monthly',
     *     timePeriod: Shapes\TimePeriod,
     *     maxResults?: int<0, 100>|null,
     *     orderBy?: Shapes\OrderBy|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
