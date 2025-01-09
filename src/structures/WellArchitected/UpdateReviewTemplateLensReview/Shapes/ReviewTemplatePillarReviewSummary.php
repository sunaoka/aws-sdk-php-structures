<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateReviewTemplateLensReview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PillarId
 * @property string $PillarName
 * @property string $Notes
 * @property array<'UNANSWERED'|'ANSWERED', int<0, max>> $QuestionCounts
 */
class ReviewTemplatePillarReviewSummary extends Shape
{
    /**
     * @param array{
     *     PillarId?: string,
     *     PillarName?: string,
     *     Notes?: string,
     *     QuestionCounts?: array<'UNANSWERED'|'ANSWERED', int<0, max>>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
