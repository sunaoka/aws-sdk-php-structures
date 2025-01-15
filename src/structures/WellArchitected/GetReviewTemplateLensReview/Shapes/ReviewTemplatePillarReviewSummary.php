<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetReviewTemplateLensReview\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PillarId
 * @property string|null $PillarName
 * @property string|null $Notes
 * @property array<'UNANSWERED'|'ANSWERED', int<0, max>>|null $QuestionCounts
 */
class ReviewTemplatePillarReviewSummary extends Shape
{
    /**
     * @param array{
     *     PillarId?: string|null,
     *     PillarName?: string|null,
     *     Notes?: string|null,
     *     QuestionCounts?: array<'UNANSWERED'|'ANSWERED', int<0, max>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
