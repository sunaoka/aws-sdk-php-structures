<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\GetMetricsSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $date
 * @property FindingMetricsValuePerSeverity|null $openFindings
 * @property list<CategoryWithFindingNum>|null $categoriesWithMostFindings
 * @property list<ScanNameWithFindingNum>|null $scansWithMostOpenFindings
 * @property list<ScanNameWithFindingNum>|null $scansWithMostOpenCriticalFindings
 */
class MetricsSummary extends Shape
{
    /**
     * @param array{
     *     date?: \Aws\Api\DateTimeResult|null,
     *     openFindings?: FindingMetricsValuePerSeverity|null,
     *     categoriesWithMostFindings?: list<CategoryWithFindingNum>|null,
     *     scansWithMostOpenFindings?: list<ScanNameWithFindingNum>|null,
     *     scansWithMostOpenCriticalFindings?: list<ScanNameWithFindingNum>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
