<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetLensReview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LensAlias
 * @property string|null $LensArn
 * @property string|null $LensVersion
 * @property string|null $LensName
 * @property 'CURRENT'|'NOT_CURRENT'|'DEPRECATED'|'DELETED'|'UNSHARED'|null $LensStatus
 * @property list<PillarReviewSummary>|null $PillarReviewSummaries
 * @property JiraSelectedQuestionConfiguration|null $JiraConfiguration
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property string|null $Notes
 * @property array<'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE', int<0, max>>|null $RiskCounts
 * @property string|null $NextToken
 * @property list<WorkloadProfile>|null $Profiles
 * @property array<'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE', int<0, max>>|null $PrioritizedRiskCounts
 */
class LensReview extends Shape
{
    /**
     * @param array{
     *     LensAlias?: string|null,
     *     LensArn?: string|null,
     *     LensVersion?: string|null,
     *     LensName?: string|null,
     *     LensStatus?: 'CURRENT'|'NOT_CURRENT'|'DEPRECATED'|'DELETED'|'UNSHARED'|null,
     *     PillarReviewSummaries?: list<PillarReviewSummary>|null,
     *     JiraConfiguration?: JiraSelectedQuestionConfiguration|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     Notes?: string|null,
     *     RiskCounts?: array<'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE', int<0, max>>|null,
     *     NextToken?: string|null,
     *     Profiles?: list<WorkloadProfile>|null,
     *     PrioritizedRiskCounts?: array<'UNANSWERED'|'HIGH'|'MEDIUM'|'NONE'|'NOT_APPLICABLE', int<0, max>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
