<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateReviewTemplateLensReview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LensAlias
 * @property string $LensArn
 * @property string $LensVersion
 * @property string $LensName
 * @property 'CURRENT'|'NOT_CURRENT'|'DEPRECATED'|'DELETED'|'UNSHARED' $LensStatus
 * @property list<ReviewTemplatePillarReviewSummary> $PillarReviewSummaries
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property string $Notes
 * @property array<'UNANSWERED'|'ANSWERED', int<0, max>> $QuestionCounts
 * @property string $NextToken
 */
class ReviewTemplateLensReview extends Shape
{
    /**
     * @param array{
     *     LensAlias?: string,
     *     LensArn?: string,
     *     LensVersion?: string,
     *     LensName?: string,
     *     LensStatus?: 'CURRENT'|'NOT_CURRENT'|'DEPRECATED'|'DELETED'|'UNSHARED',
     *     PillarReviewSummaries?: list<ReviewTemplatePillarReviewSummary>,
     *     UpdatedAt?: \Aws\Api\DateTimeResult,
     *     Notes?: string,
     *     QuestionCounts?: array<'UNANSWERED'|'ANSWERED', int<0, max>>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
