<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateLensReview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LensAlias
 * @property string $LensArn
 * @property string $LensVersion
 * @property string $LensName
 * @property 'CURRENT'|'NOT_CURRENT'|'DEPRECATED'|'DELETED'|'UNSHARED' $LensStatus
 * @property list<PillarReviewSummary> $PillarReviewSummaries
 * @property JiraSelectedQuestionConfiguration $JiraConfiguration
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property string $Notes
 * @property array<'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE', int<0, max>> $RiskCounts
 * @property string $NextToken
 * @property list<WorkloadProfile> $Profiles
 * @property array<'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE', int<0, max>> $PrioritizedRiskCounts
 */
class LensReview extends Shape
{
    /**
     * @param array{
     *     LensAlias?: string,
     *     LensArn?: string,
     *     LensVersion?: string,
     *     LensName?: string,
     *     LensStatus?: 'CURRENT'|'NOT_CURRENT'|'DEPRECATED'|'DELETED'|'UNSHARED',
     *     PillarReviewSummaries?: list<PillarReviewSummary>,
     *     JiraConfiguration?: JiraSelectedQuestionConfiguration,
     *     UpdatedAt?: \Aws\Api\DateTimeResult,
     *     Notes?: string,
     *     RiskCounts?: array<'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE', int<0, max>>,
     *     NextToken?: string,
     *     Profiles?: list<WorkloadProfile>,
     *     PrioritizedRiskCounts?: array<'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE', int<0, max>>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
