<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetMetrics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\SummaryMetricQuery>|null $SummaryMetricQueries
 */
class GetMetricsRequest extends Request
{
    /**
     * @param array{SummaryMetricQueries?: list<Shapes\SummaryMetricQuery>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
