<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\ListFindingsMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FindingMetricsValuePerSeverity $closedFindings
 * @property \Aws\Api\DateTimeResult $date
 * @property FindingMetricsValuePerSeverity $meanTimeToClose
 * @property FindingMetricsValuePerSeverity $newFindings
 * @property FindingMetricsValuePerSeverity $openFindings
 */
class AccountFindingsMetric extends Shape
{
    /**
     * @param array{
     *     closedFindings?: FindingMetricsValuePerSeverity,
     *     date?: \Aws\Api\DateTimeResult,
     *     meanTimeToClose?: FindingMetricsValuePerSeverity,
     *     newFindings?: FindingMetricsValuePerSeverity,
     *     openFindings?: FindingMetricsValuePerSeverity
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
