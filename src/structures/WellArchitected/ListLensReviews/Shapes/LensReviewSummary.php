<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListLensReviews\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LensAlias
 * @property string $LensArn
 * @property string $LensVersion
 * @property string $LensName
 * @property 'CURRENT'|'NOT_CURRENT'|'DEPRECATED'|'DELETED'|'UNSHARED' $LensStatus
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property array<'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE', int<0, max>> $RiskCounts
 * @property list<WorkloadProfile> $Profiles
 * @property array<'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE', int<0, max>> $PrioritizedRiskCounts
 */
class LensReviewSummary extends Shape
{
    /**
     * @param array{
     *     LensAlias?: string,
     *     LensArn?: string,
     *     LensVersion?: string,
     *     LensName?: string,
     *     LensStatus?: 'CURRENT'|'NOT_CURRENT'|'DEPRECATED'|'DELETED'|'UNSHARED',
     *     UpdatedAt?: \Aws\Api\DateTimeResult,
     *     RiskCounts?: array<'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE', int<0, max>>,
     *     Profiles?: list<WorkloadProfile>,
     *     PrioritizedRiskCounts?: array<'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE', int<0, max>>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
