<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListWorkloads\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WorkloadId
 * @property string $WorkloadArn
 * @property string $WorkloadName
 * @property string $Owner
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property list<string> $Lenses
 * @property array<'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE', int> $RiskCounts
 * @property 'NOT_APPLICABLE'|'NOT_STARTED'|'IN_PROGRESS'|'COMPLETE'|'RISK_ACKNOWLEDGED' $ImprovementStatus
 * @property list<WorkloadProfile> $Profiles
 * @property array<'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE', int> $PrioritizedRiskCounts
 */
class WorkloadSummary extends Shape
{
    /**
     * @param array{
     *     WorkloadId?: string,
     *     WorkloadArn?: string,
     *     WorkloadName?: string,
     *     Owner?: string,
     *     UpdatedAt?: \Aws\Api\DateTimeResult,
     *     Lenses?: list<string>,
     *     RiskCounts?: array<'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE', int>,
     *     ImprovementStatus?: 'NOT_APPLICABLE'|'NOT_STARTED'|'IN_PROGRESS'|'COMPLETE'|'RISK_ACKNOWLEDGED',
     *     Profiles?: list<WorkloadProfile>,
     *     PrioritizedRiskCounts?: array<'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE', int>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
