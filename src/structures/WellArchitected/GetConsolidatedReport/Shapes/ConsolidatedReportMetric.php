<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetConsolidatedReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'WORKLOAD'|null $MetricType
 * @property array<'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE', int<0, max>>|null $RiskCounts
 * @property string|null $WorkloadId
 * @property string|null $WorkloadName
 * @property string|null $WorkloadArn
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property list<LensMetric>|null $Lenses
 * @property int<0, max>|null $LensesAppliedCount
 */
class ConsolidatedReportMetric extends Shape
{
    /**
     * @param array{
     *     MetricType?: 'WORKLOAD'|null,
     *     RiskCounts?: array<'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE', int<0, max>>|null,
     *     WorkloadId?: string|null,
     *     WorkloadName?: string|null,
     *     WorkloadArn?: string|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     Lenses?: list<LensMetric>|null,
     *     LensesAppliedCount?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
