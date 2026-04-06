<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\GetMetricsSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CategoryWithFindingNum>|null $categoriesWithMostFindings
 * @property \Aws\Api\DateTimeResult|null $date
 * @property FindingMetricsValuePerSeverity|null $openFindings
 * @property list<ScanNameWithFindingNum>|null $scansWithMostOpenCriticalFindings
 * @property list<ScanNameWithFindingNum>|null $scansWithMostOpenFindings
 */
class MetricsSummary extends Shape
{
    /**
     * @param array{
     *     categoriesWithMostFindings?: list<CategoryWithFindingNum>|null,
     *     date?: \Aws\Api\DateTimeResult|null,
     *     openFindings?: FindingMetricsValuePerSeverity|null,
     *     scansWithMostOpenCriticalFindings?: list<ScanNameWithFindingNum>|null,
     *     scansWithMostOpenFindings?: list<ScanNameWithFindingNum>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
