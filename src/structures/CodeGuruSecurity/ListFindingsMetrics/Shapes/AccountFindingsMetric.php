<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\ListFindingsMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FindingMetricsValuePerSeverity|null $closedFindings
 * @property \Aws\Api\DateTimeResult|null $date
 * @property FindingMetricsValuePerSeverity|null $meanTimeToClose
 * @property FindingMetricsValuePerSeverity|null $newFindings
 * @property FindingMetricsValuePerSeverity|null $openFindings
 */
class AccountFindingsMetric extends Shape
{
    /**
     * @param array{
     *     closedFindings?: FindingMetricsValuePerSeverity|null,
     *     date?: \Aws\Api\DateTimeResult|null,
     *     meanTimeToClose?: FindingMetricsValuePerSeverity|null,
     *     newFindings?: FindingMetricsValuePerSeverity|null,
     *     openFindings?: FindingMetricsValuePerSeverity|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
