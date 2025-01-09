<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\GetMetricsSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CategoryWithFindingNum> $categoriesWithMostFindings
 * @property \Aws\Api\DateTimeResult $date
 * @property FindingMetricsValuePerSeverity $openFindings
 * @property list<ScanNameWithFindingNum> $scansWithMostOpenCriticalFindings
 * @property list<ScanNameWithFindingNum> $scansWithMostOpenFindings
 */
class MetricsSummary extends Shape
{
    /**
     * @param array{
     *     categoriesWithMostFindings?: list<CategoryWithFindingNum>,
     *     date?: \Aws\Api\DateTimeResult,
     *     openFindings?: FindingMetricsValuePerSeverity,
     *     scansWithMostOpenCriticalFindings?: list<ScanNameWithFindingNum>,
     *     scansWithMostOpenFindings?: list<ScanNameWithFindingNum>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
