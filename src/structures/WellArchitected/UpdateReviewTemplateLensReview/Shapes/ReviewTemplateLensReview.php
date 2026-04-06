<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateReviewTemplateLensReview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LensAlias
 * @property string|null $LensArn
 * @property string|null $LensVersion
 * @property string|null $LensName
 * @property 'CURRENT'|'NOT_CURRENT'|'DEPRECATED'|'DELETED'|'UNSHARED'|null $LensStatus
 * @property list<ReviewTemplatePillarReviewSummary>|null $PillarReviewSummaries
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property string|null $Notes
 * @property array<'UNANSWERED'|'ANSWERED', int<0, max>>|null $QuestionCounts
 * @property string|null $NextToken
 */
class ReviewTemplateLensReview extends Shape
{
    /**
     * @param array{
     *     LensAlias?: string|null,
     *     LensArn?: string|null,
     *     LensVersion?: string|null,
     *     LensName?: string|null,
     *     LensStatus?: 'CURRENT'|'NOT_CURRENT'|'DEPRECATED'|'DELETED'|'UNSHARED'|null,
     *     PillarReviewSummaries?: list<ReviewTemplatePillarReviewSummary>|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     Notes?: string|null,
     *     QuestionCounts?: array<'UNANSWERED'|'ANSWERED', int<0, max>>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
