<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\ListFindingsMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $date
 * @property FindingMetricsValuePerSeverity|null $newFindings
 * @property FindingMetricsValuePerSeverity|null $closedFindings
 * @property FindingMetricsValuePerSeverity|null $openFindings
 * @property FindingMetricsValuePerSeverity|null $meanTimeToClose
 */
class AccountFindingsMetric extends Shape
{
    /**
     * @param array{
     *     date?: \Aws\Api\DateTimeResult|null,
     *     newFindings?: FindingMetricsValuePerSeverity|null,
     *     closedFindings?: FindingMetricsValuePerSeverity|null,
     *     openFindings?: FindingMetricsValuePerSeverity|null,
     *     meanTimeToClose?: FindingMetricsValuePerSeverity|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
