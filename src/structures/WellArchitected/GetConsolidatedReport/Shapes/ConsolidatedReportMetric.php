<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetConsolidatedReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'WORKLOAD' $MetricType
 * @property array<'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE', int<0, max>> $RiskCounts
 * @property string $WorkloadId
 * @property string $WorkloadName
 * @property string $WorkloadArn
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property list<LensMetric> $Lenses
 * @property int<0, max> $LensesAppliedCount
 */
class ConsolidatedReportMetric extends Shape
{
    /**
     * @param array{
     *     MetricType?: 'WORKLOAD',
     *     RiskCounts?: array<'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE', int<0, max>>,
     *     WorkloadId?: string,
     *     WorkloadName?: string,
     *     WorkloadArn?: string,
     *     UpdatedAt?: \Aws\Api\DateTimeResult,
     *     Lenses?: list<LensMetric>,
     *     LensesAppliedCount?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
