<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListMilestones\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $WorkloadId
 * @property string|null $WorkloadArn
 * @property string|null $WorkloadName
 * @property string|null $Owner
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property list<string>|null $Lenses
 * @property array<'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE', int<0, max>>|null $RiskCounts
 * @property 'NOT_APPLICABLE'|'NOT_STARTED'|'IN_PROGRESS'|'COMPLETE'|'RISK_ACKNOWLEDGED'|null $ImprovementStatus
 * @property list<WorkloadProfile>|null $Profiles
 * @property array<'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE', int<0, max>>|null $PrioritizedRiskCounts
 */
class WorkloadSummary extends Shape
{
    /**
     * @param array{
     *     WorkloadId?: string|null,
     *     WorkloadArn?: string|null,
     *     WorkloadName?: string|null,
     *     Owner?: string|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     Lenses?: list<string>|null,
     *     RiskCounts?: array<'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE', int<0, max>>|null,
     *     ImprovementStatus?: 'NOT_APPLICABLE'|'NOT_STARTED'|'IN_PROGRESS'|'COMPLETE'|'RISK_ACKNOWLEDGED'|null,
     *     Profiles?: list<WorkloadProfile>|null,
     *     PrioritizedRiskCounts?: array<'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE', int<0, max>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
