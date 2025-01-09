<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListMilestones\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WorkloadId
 * @property string $WorkloadArn
 * @property string $WorkloadName
 * @property string $Owner
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property list<string> $Lenses
 * @property array<'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE', int<0, max>> $RiskCounts
 * @property 'NOT_APPLICABLE'|'NOT_STARTED'|'IN_PROGRESS'|'COMPLETE'|'RISK_ACKNOWLEDGED' $ImprovementStatus
 * @property list<WorkloadProfile> $Profiles
 * @property array<'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE', int<0, max>> $PrioritizedRiskCounts
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
     *     RiskCounts?: array<'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE', int<0, max>>,
     *     ImprovementStatus?: 'NOT_APPLICABLE'|'NOT_STARTED'|'IN_PROGRESS'|'COMPLETE'|'RISK_ACKNOWLEDGED',
     *     Profiles?: list<WorkloadProfile>,
     *     PrioritizedRiskCounts?: array<'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE', int<0, max>>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
